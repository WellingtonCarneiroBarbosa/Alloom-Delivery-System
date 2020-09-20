<?php

namespace App\Http\Controllers\TenantFront;

use Illuminate\Http\Request;
use App\Models\Franchise\Order\Order;
use App\Models\Franchise\Order\Pizza;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Tenant\Order\AddReceiverData;
use Route;

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

        //save order
        $data["totalPrice"] = $cart->totalPrice;
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

        if($request["access-key"] != $order->access_key) {
            return redirect()->back()->with([
                "error" => "CPF incorreto para esse pedido"
            ]);
        }

        $franchise = $this->getTenantFranchiseOrFail();

        if(Session::has("order-access-key-" . $franchise->id))
            Session::flush("order-access-key-" . $franchise->id);

        $request->session()->put('order-access-key-' . $franchise->id, $order->access_key);

        return redirect()->route("tenant-front.franchise.order.details", [
            $franchise->tenant->url_prefix, $franchise->url_prefix,
            $order->id
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
