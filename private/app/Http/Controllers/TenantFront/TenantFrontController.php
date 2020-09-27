<?php

namespace App\Http\Controllers\TenantFront;

use Session;
use Exception;
use Illuminate\Http\Request;
use App\Models\Tenant\Pizza\Size;
use App\Models\Tenant\Order\Order;
use App\Models\Tenant\Order\Pizza;
use App\Models\Tenant\Pizza\Border;
use App\Models\Tenant\Pizza\Flavor;
use App\Traits\FranchiseController;
use App\Carts\PizzaCartPricePerSize;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\Order\AddBilingData;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;

class TenantFrontController extends Controller
{
    use FranchiseController;

    public function chooseFranchise() {
        try {
            return view('tenant-front.choose-franchise', [
                "tenant" => \Request::get("tenant")
            ]);
        } catch (Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            abort(500);
        }
    }

    public function index() {
        return view('tenant-front.franchise.index', [
            "franchise" => $this->getTenantFranchiseOrFail(),
        ]);
    }


    public function location() {
        return view('tenant-front.franchise.location', [
            "franchise" => $this->getTenantFranchiseOrFail(),
        ]);
    }
}
