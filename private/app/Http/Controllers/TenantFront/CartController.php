<?php

namespace App\Http\Controllers\TenantFront;

use App\Carts\OrderCart;
use Illuminate\Http\Request;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use App\Models\Franchise\Pizza\Size;
use Illuminate\Support\Facades\Session;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;

class CartController extends Controller
{
    use FranchiseController;

    public function getCartModalView() {
        return view("components.order.cart_data", [
            "franchise" => $this->getTenantFranchiseOrFail(),
            "cart" => $this->getFranchiseCart(),
        ]);
    }

    public function destroy(Request $request) {
        $request->session()->forget("order-cart-" . $this->getTenantFranchiseOrFail()->id);

        $franchise = $this->getTenantFranchiseOrFail();

        return redirect()->back()->with([
            "success" => "Carrinho reiniciado"
        ]);
    }

    public function addPizzaToCart(AddPizzaToCart $request) {
        $pizza_data = $this->getPizzaData($request->validated());

        $order_cart = $this->getCurrentCartOrCreateOne();

        $order_cart->addPizzaToCart($pizza_data["border"], $pizza_data["flavors"], $pizza_data["size"], $request["quantity"], $request["details"]);

        $request->session()->put("order-cart-" . $this->getTenantFranchiseOrFail()->id, $order_cart);

        return redirect()->back()->with([
            "success" => "Pizza adicionada ao carrinho"
        ]);
    }

    public function removePizzaFromCart(Request $request) {
        $cart = $this->getCurrentCartOrCreateOne();

        $cart->removePizzaFromCart($request["pizza_index"]);

        //if there is any product in order, forget this session
        //for server memory optimization
        if($cart->totalQuantity <= 0) {
            Session::forget("order-cart-" . $this->getTenantFranchiseOrFail()->id);
        } else {
            $this->updateSessionCart($cart);
        }

        return redirect()->back()->with([
            "success" => "Pizza removida do carrinho"
        ]);
    }

    protected function updateSessionCart($data) {
        $cart = new OrderCart($data);
        $franchise_id = $this->getTenantFranchiseOrFail()->id;

        Session::forget("order-cart-" . $franchise_id);
        Session::put("order-cart-" . $franchise_id, $cart);
    }

    protected function getCurrentCartOrCreateOne() {
        $order_cart = $this->getFranchiseCart();

        //if has any cart, create a new empty cart
        return $order_cart != null ? $order_cart : new OrderCart(null);
    }

    protected function getFranchiseCart() {
        $franchise_id = $this->getTenantFranchiseOrFail()->id;
        if(Session::has("order-cart-" . $franchise_id))
            return new OrderCart(Session::get("order-cart-" . $franchise_id));

        return null;
    }

    protected function getPizzaData($request) {
        $size = Size::find($request["pizza_size_id"]);
        $flavors = FlavorPrice::whereIn("pizza_flavor_id", $request["pizza_flavors_id"])->where("pizza_size_id", $request["pizza_size_id"])->get();

        if(isset($request["pizza_border_id"]))
            $border = BorderPrice::where("pizza_border_id", $request["pizza_border_id"])->where("pizza_size_id", $request["pizza_size_id"])->first();
        else
            $border = null;

        return [
            "size" => $size,
            "flavors" => $flavors,
            "border" => $border
        ];
    }
}
