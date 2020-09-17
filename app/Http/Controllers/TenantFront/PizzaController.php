<?php

namespace App\Http\Controllers\TenantFront;

use App\Carts\OrderCart;
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

    public function getFlavorsAndBorders(Request $request) {
        $pizza_size_id = $request->only("pizza_size_id");

        $franchise = $this->getTenantFranchiseOrFail();
        $size = Size::where("franchise_id", $franchise->id)->where("id", $pizza_size_id)->first();

        return view("components.order.pizza.modal-content", [
            "size" => $size,
            "franchise" => $franchise
        ]);
    }
}
