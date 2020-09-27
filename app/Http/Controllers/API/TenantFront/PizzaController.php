<?php

namespace App\Http\Controllers\API\TenantFront;

use Illuminate\Http\Request;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;
use Illuminate\Support\Facades\Route;

class PizzaController extends Controller
{
    use FranchiseController;

    public function getPizzaFlavorsAndBorderFromPizzaSize(Request $request) {
        $pizza_size_id = $request->only("pizza_size_id");

        $franchise = $this->getTenantFranchiseOrFail();

        $pizzaBordersPrice = BorderPrice::whereIn("pizza_size_id", $pizza_size_id)->where("franchise_id", $franchise->id)->get();
        $pizzaFlavorsPrice = FlavorPrice::whereIn("pizza_size_id", $pizza_size_id)->where("franchise_id", $franchise->id)->get();

        $borders = [];
        $flavors = [];

        foreach($pizzaBordersPrice as $pizzaBorderPrice) {
            $pizzaBorderPrice->border;
            array_push($borders, $pizzaBorderPrice);
        }

        foreach($pizzaFlavorsPrice as $pizzaFlavorPrice) {
            $pizzaFlavorPrice->flavor;
            array_push($flavors, $pizzaFlavorPrice);
        }

        return response()->json([
            "borders" => $borders,
            "flavors" => $flavors,
        ]);
    }
}
