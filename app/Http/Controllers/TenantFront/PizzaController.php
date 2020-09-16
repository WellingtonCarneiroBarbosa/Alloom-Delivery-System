<?php

namespace App\Http\Controllers\TenantFront;

use App\Carts\PizzaCart;
use Illuminate\Http\Request;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use App\Models\Franchise\Pizza\Size;
use App\Models\Franchise\Pizza\Border;
use App\Models\Franchise\Pizza\Flavor;
use Illuminate\Support\Facades\Session;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;

class PizzaController extends Controller
{
    use FranchiseController;

    public function addPizzaToCart(AddPizzaToCart $request) {
        $data = $request->validated();

        $oldcart = Session::has('pizza-cart') ? Session::get('pizza-cart') : null;

        $cart = new PizzaCart($oldcart);

        $size = Size::find($data["pizza_size_id"]);
        $flavors = FlavorPrice::whereIn("pizza_flavor_id", $data["pizza_flavors_id"])->where("pizza_size_id", $data["pizza_size_id"])->get();

        if(isset($data["pizza_border_id"]))
            $border = BorderPrice::where("pizza_border_id", $data["pizza_border_id"])->where("pizza_size_id", $data["pizza_size_id"])->first();
        else
            $border = null;

        $cart->add($border, $flavors, $size, $data["quantity"]);

        $request->session()->put('pizza-cart', $cart);

        return redirect()->back()->with([
            "success" => "Pizza adicionada ao carrinho"
        ]);
    }

    public function getFlavorsAndBorders(Request $request) {
        $pizza_size_id = $request->only("pizza_size_id");

        $franchise = $this->getTenantFranchiseOrFail();
        $size = Size::where("franchise_id", $franchise->id)->where("id", $pizza_size_id)->first();
        return view("components.order-pizza.modal-content", [
            "size" => $size,
            "franchise" => $franchise
        ]);
    }
}
