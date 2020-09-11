<?php

namespace App\Http\Controllers\TenantFront;

use Exception;
use App\Models\Alloom\Tenant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;
use App\Carts\PizzaCart;
use Illuminate\Support\Facades\Route;
use Session;

class TenantFrontController extends Controller
{
    protected $tenant;

    public function __construct()
    {
        $this->tenant = Tenant::getTenantByUrlPrefixOrFail(Route::current()->tenant_url_prefix);
    }

    public function chooseUnit() {
        try {
            return view('tenant-front.choose-unit', [
                "tenant" => $this->tenant
            ]);
        } catch (Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            abort(500);
        }
    }

    public function index() {
        return view('tenant-front.unit.index', [
            "unit" => $this->getTenantUnitOrFail(),
        ]);
    }

    public function addPizzaToCart(AddPizzaToCart $request) {
        $data = $request->validated();

        $oldcart = Session::has('pizza_cart') ? Session::get('pizza_cart') : null;

        $cart = new PizzaCart($oldcart);

        $cart->add($data, $data["pizza_size_id"]);

        dd($cart);
    }

    protected function getTenantUnitOrFail() {
        return $this->tenant->restaurants()->where('unit_url_prefix', Route::current()->unit_url_prefix)->firstOrFail();
    }
}
