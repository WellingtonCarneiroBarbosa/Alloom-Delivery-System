<?php

namespace App\Http\Controllers\TenantFront;

use App\Carts\PizzaCart;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use App\Models\Franchise\Pizza\Size;
use App\Models\Franchise\Pizza\Border;
use App\Models\Franchise\Pizza\Flavor;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;

class PizzaController extends Controller
{
    use FranchiseController;

    public function addPizzaToCart(AddPizzaToCart $request) {
        $data = $request->validated();

        $oldcart = Session::has('pizza-cart') ? Session::get('pizza-cart') : null;

        $cart = new PizzaCart($oldcart);

        $size = Size::find($data["pizza_size_id"]);
        $flavors = Flavor::whereIn("id", $data["pizza_flavors_id"])->get();

        if($data["pizza_border_id"])
            $border = Border::find($data["pizza_border_id"]);
        else
            $border = null;

        $cart->add($border, $flavors, $size, $data["quantity"]);

        $request->session()->put('pizza-cart', $cart);

        //temp
        return response()->json($cart, 200);

        return redirect()->back()->with([
            "success" => "Pizza adicionada ao carrinho"
        ]);
    }
}
