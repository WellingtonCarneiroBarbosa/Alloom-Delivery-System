<?php

namespace App\Http\Controllers\TenantFront;

use Route;
use Illuminate\Http\Request;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Franchise\Order\Order;
use App\Models\Franchise\Order\Pizza;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Tenant\Order\AddReceiverData;
use App\Models\Franchise\Order\DeliveryFee;
use GuzzleHttp\Client;

class OrderController extends Controller
{
    use FranchiseController;

    public function viewAddReceiverData() {
        $franchise = $this->getTenantFranchiseOrFail();

        //get cart
        $cart = Session::has("order-cart-" . $franchise->id);
        if(! $cart) {
            return redirect()->route("tenant-front.franchise.index", [
                $franchise->tenant->url_prefix, $franchise->url_prefix
            ])->with([
                "error" => "Não foi possível localizar seu carrinho!"
            ]);
        }

        return view("tenant-front.franchise.order.steps.one", [
            "franchise" => $franchise
        ]);
    }

    public function storeReceiverDataAndMakeOrder(AddReceiverData $request) {
        $data = $request->validated();
        $franchise = $this->getTenantFranchiseOrFail();

        //get cart
        $cart = Session::has("order-cart-" . $franchise->id);
        if(! $cart) {
            return redirect()->route("tenant-front.franchise.index", [
                $franchise->tenant->url_prefix, $franchise->url_prefix
            ])->with([
                "error" => "Não foi possível localizar seu carrinho!"
            ]);
        }
        $cart = Session::get("order-cart-" . $franchise->id);

        if(! isset($data["pick_up_at_the_counter"])) {
            $delivery_data = [
                "address" => $data["address"],
                "city" => $data["city"],
                "state" => $data["state"],
            ];
            $delivery_calc_result = $this->calculateDeliveryFee($delivery_data, $franchise);

            $delivery_fee = $delivery_calc_result["delivery_fee"];
            $receiver_address = $delivery_calc_result["receiver_address"];
        } else {
            $delivery_fee = null;
            $receiver_address = null;
        }

        //save order
        if($delivery_fee)
            $data["totalPrice"] = $delivery_fee + $cart->totalPrice;
        else
            $data["totalPrice"] = $cart->totalPrice;

        $data["access_key"] = Hash::make($data["access_key"]);
        $data["delivery_fee"] = $delivery_fee;
        $data["receiver_address"] = $receiver_address;
        $data["totalQuantity"] = $cart->totalQuantity;
        $data["details"] = $cart->details;
        $data["franchise_id"] = $franchise->id;
        $order = $this->saveOrder($data);

        if($order == false) {
            return redirect()->back()->with([
                "error" => "Não foi possível salvar seu pedido."
            ])->withInput($data);
        }

        if(Session::has("order-access-key-" . $franchise->id))
            Session::flush("order-access-key-" . $franchise->id);

        $request->session()->put('order-access-key-' . $franchise->id, $order->access_key);

        $pizzas = $this->savePizzas($cart->pizza_cart, $order->id);

        if($pizzas == false) {
            $this->deleteOrder($order->id);

            return redirect()->back()->with([
                "error" => "Não foi possível salvar seu pedido."
            ])->withInput($data);
        }

        //flush cart session
        Session::flush("order-cart-" . $franchise->id);

        //redirect to confirm order
        return redirect()->route("tenant-front.franchise.order.confirm-order", [
            "tenant_url_prefix" => $franchise->tenant->url_prefix,
            "franchise_url_prefix" => $franchise->url_prefix,
            "order_id" => $order->id
        ]);
    }

    public function confirmOrder() {
        $franchise = $this->getTenantFranchiseOrFail();
        $order_id = Route::current()->order_id;

        $order = Order::findOrFail($order_id);

        return view("tenant-front.franchise.order.steps.confirm-order", [
            "franchise" => $franchise,
            "order" => $order
        ]);
    }

    public function confirmOrderAndRedirectToOrderDetails() {
        $order_id = Route::current()->order_id;
        $franchise = $this->getTenantFranchiseOrFail();

        $order = Order::findOrFail($order_id);
        $order->update([
            "confirmed_by_receiver" => true
        ]);

        return redirect()->route("tenant-front.franchise.order.details", [
            "tenant_url_prefix" =>  $franchise->tenant->url_prefix, "franchise_url_prefix" => $franchise->url_prefix,
            "order_id" =>  $order->id, "recent" => true
        ]);
    }

    public function confirmAccessKeyView($order_id) {
        $order_id = Order::findOrFail(Route::current()->order_id)->id;

        return view("tenant-front.franchise.order.confirm-access-key", [
            "franchise" => $this->getTenantFranchiseOrFail(),
            "order_id" => $order_id
        ]);
    }

    public function confirmAccessKey(Request $request) {
        $order = Order::findOrFail(Route::current()->order_id);

        if (Hash::check($request["access-key"], $order->access_key)) {
            $franchise = $this->getTenantFranchiseOrFail();

            if(Session::has("order-access-key-" . $franchise->id))
                Session::flush("order-access-key-" . $franchise->id);

            $request->session()->put('order-access-key-' . $franchise->id, $order->access_key);

            return redirect()->route("tenant-front.franchise.order.details", [
                $franchise->tenant->url_prefix, $franchise->url_prefix,
                $order->id
            ]);
        }


        return redirect()->back()->with([
            "error" => "CPF incorreto para esse pedido"
        ]);
    }

    public function orderDetails() {
        $order = Order::findOrFail(Route::current()->order_id);

        $recent = Route::current()->recent;

        if($recent) {
            return view("tenant-front.franchise.order.details", [
                "order" => $order,
                "franchise" => $this->getTenantFranchiseOrFail(),
                "recent" => true,
            ]);
        }

        return view("tenant-front.franchise.order.details", [
            "order" => $order,
            "franchise" => $this->getTenantFranchiseOrFail(),
        ]);
    }

    protected function calculateDeliveryFee($data, $franchise) {
        $delivery_fee = DeliveryFee::where("franchise_id", $franchise->id)->firstOrFail();

        #api url
        $urlBase = "http://www.mapquestapi.com/directions/v2/routematrix?key=" . config("app.mapquest_public_key");
        $from = $franchise["address"] . ", "  . $franchise["city"] . ", " . $franchise["state"] . ", " . "Brazil";
        $to = $data["address"] . ", " . $data["city"] . ", "  . $data["state"] . ", " . "Brazil";
        $params = [
            "locations" => [
                $from, $to
            ],
            "options" => [
                "allToAll" => false
            ],
        ];

        try {
            $client = new Client();
            $res = $client->post($urlBase, [
                \GuzzleHttp\RequestOptions::JSON => $params // or 'json' => [...]
            ]);

            $response = json_decode($res->getBody(), true);

            $distance = $response["distance"][1];

            $distance = $distance * 1.609;

            $delivery_fee =  $distance * $delivery_fee->fee_per_km;

            return [
                "delivery_fee" => $delivery_fee,
                "distance" => $distance,
                "receiver_address" => $to,
                "franchise_address" => $from
            ];
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return false;
        }
    }

    protected function saveOrder($data) {
        try {
            return Order::create($data);
        } catch(\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return false;
        }
    }

    protected function deleteOrder($order_id) {
        return Order::findOrFail($order_id)->destroy();
    }

    protected function savePizzas($pizza_cart, $order_id) {
        try {
            $pizzas = [];

            foreach($pizza_cart as $pizza_item) {
                $pizza_flavors = [];
                foreach($pizza_item["flavors"] as $flavor) {
                    array_push($pizza_flavors, $flavor->pizza_flavor_id);
                }
                $pizza_item_data = [
                    "pizza_size_id" =>  $pizza_item["size"]->id,
                    "pizza_border_id" => $pizza_item["border"] != null ? $pizza_item["border"]->id : null,
                    "pizza_flavors_id" => $pizza_flavors,
                    "details" => $pizza_item["details"],
                    "quantity" => $pizza_item["quantity"],
                    "total_price" => $pizza_item["total_price"],
                    "order_id" => $order_id
                ];
                array_push($pizzas, Pizza::create($pizza_item_data));
            }

            return $pizzas;
        } catch(\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return false;
        }
    }
}
