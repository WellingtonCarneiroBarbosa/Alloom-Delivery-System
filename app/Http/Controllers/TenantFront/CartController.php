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

    public function index() {
        return view("components.order.modal-content", [
            "franchise" => $this->getTenantFranchiseOrFail(),
            "order_cart" => $this->getFranchiseCart(),
        ]);
    }

    public function addPizzaToCart(AddPizzaToCart $request) {
        $pizza_data = $this->getPizzaData($request->validated());

        $order_cart = $this->getCurrentCartOrCreateOne();

        $franchise_id = $this->getTenantFranchiseOrFail()->id;

        $order_cart->addPizzaToCart($pizza_data["border"], $pizza_data["flavors"], $pizza_data["size"], $request["quantity"], $franchise_id);

        $request->session()->put("order-cart-" . $this->getTenantFranchiseOrFail()->id, $order_cart);

        return redirect()->back()->with([
            "success" => "Pizza adicionada ao carrinho"
        ]);
    }

    public function destroy(Request $request) {
        $request->session()->flush("order-cart-" . $this->getTenantFranchiseOrFail()->id);

        $franchise = $this->getTenantFranchiseOrFail();

        return redirect()->route("tenant-front.franchise.index", [$this->tenant->url_prefix, $franchise->url_prefix])->with([
            "success" => "Carrinho reiniciado"
        ]);
    }
}
