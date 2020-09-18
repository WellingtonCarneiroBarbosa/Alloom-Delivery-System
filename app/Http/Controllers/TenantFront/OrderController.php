<?php

namespace App\Http\Controllers\TenantFront;

use Illuminate\Http\Request;
use App\Models\Tenant\Order\Order;
use App\Models\Tenant\Order\Pizza;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Tenant\Order\AddBilingData;

class OrderController extends Controller
{
    use FranchiseController;

    public function getAllCarts() {

        $franchise = $this->getTenantFranchiseOrFail();
        $order_cart = Session::has('order-cart') ? Session::get('order-cart') : null;

        return view("components.order.modal-content", [
            "franchise" => $franchise,
            "order_cart" => $order_cart
        ]);
    }

    public function viewAddBillingData() {
        return view("tenant-front.franchise.order.add-billing-data", [
            "franchise" => $this->getTenantFranchiseOrFail()
        ]);
    }

    public function storeBillingData(AddBilingData $request) {
        $data = $request->validated();
        $franchise = $this->getTenantFranchiseOrFail();

        $data["totalPrice"] = "0";
        $data["totalQuantity"] = "0";
        $data["franchise_id"] = $franchise->id;

        $order = Order::create($data);

        dd($order);


        return redirect()->route("tenant-front.franchise.order.step-get-2", [$franchise->tenant->url_prefix, $franchise->url_prefix, $order]);
    }

    public function addBillingDataAndMakeOrder(AddBilingData $request) {
        try {
            $order = $request->validated();
            $pizzaCart = $request->session()->get("pizza_cart");

            //[TODO]
            //Add also prices from other carts

            /**
             * Add order and billing data
             * to database
             *
             */
            $order["sub_total"] = $pizzaCart->totalPrice;
            $order["tenant_id"] = $this->tenant->id;
            $order["restaurant_id"] = $this->getTenantFranchiseOrFail()->id;
            $order = Order::create($order);

            /**
             * Add pizzas to database
             *
             */
            $pizzas = [];
            foreach($pizzaCart->pizzas as $pizza) {

                $flavors = array();

                foreach($pizza["pizza_flavors"] as $flavor) {
                    $flavors[] = $flavor->id;
                }

                $pizzaTemp = [
                    "order_id" => $order->id,
                    "pizza_size_id" => $pizza["pizza_size"]->id,
                    "pizza_border_type_id" => $pizza["pizza_border"]->id,
                    "qty" => $pizza["qty"],
                    "flavors" => $flavors,
                    "franchise_price" => $pizza["franchise_price"],
                    "total_price" => $pizza["total_price"],
                ];

                array_push($pizzas, Pizza::create($pizzaTemp));
            }


            return response()->json([
                $order, $pizzas, "message" => "Created successfully"
            ]);
        } catch (\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Não foi possível salvar seu pedido. Tente novamente"
            ]);
        }
    }
}
