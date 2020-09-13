<?php

namespace App\Http\Controllers\TenantFront;

use Session;
use Exception;
use Illuminate\Http\Request;
use App\Models\Alloom\Tenant;
use App\Models\Tenant\Pizza\Size;
use App\Models\Tenant\Pizza\Flavor;
use App\Carts\PizzaCartPricePerSize;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\Tenant\Order\AddBilingData;
use App\Http\Requests\Tenant\Pizza\AddPizzaToCart;
use App\Models\Tenant\Order\Billing;
use App\Models\Tenant\Order\Pizza;

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

        $cart = new PizzaCartPricePerSize($oldcart);

        $pizzaSize = Size::find($data["pizza_size_id"]);

        $flavors = Flavor::whereIn('id', $data["pizza_flavors"])->get();

        $cart->add($pizzaSize, $flavors, $data["pizza_order_qty"], $data["unit_id"]);

        $request->session()->put('pizza_cart', $cart);

        return redirect()->back()->with([
            "success" => "Pizza adicionada ao carrinho"
        ]);
    }

    public function viewPizzaCart() {
        return view("tenant-front.unit.view-cart", [
            "unit" => $this->getTenantUnitOrFail()
        ]);
    }

    public function deletePizzaCart(Request $request) {
        $request->session()->flush("pizza_cart");

        return redirect()->route('tenant-front.unit.index', [$this->tenant->url_prefix, $this->getTenantUnitOrFail()->unit_url_prefix]);
    }

    public function viewAddBillingData() {
        return view("tenant-front.unit.order.add-billing-data", [
            "unit" => $this->getTenantUnitOrFail()
        ]);
    }

    public function addBillingDataAndMakeOrder(AddBilingData $request) {
        try {
            $data = $request->validated();
            $pizzaCart = $request->session()->get("pizza_cart");

            //[TODO]
            //Add also prices from other carts
            $data["sub_total"] = $pizzaCart->totalPrice;

            $data["tenant_id"] = $this->tenant->id;
            $data["restaurant_id"] = $this->getTenantUnitOrFail()->id;

            $billing = Billing::create($data);
            $pizzas = [];
            foreach($pizzaCart->pizzas as $pizza) {

                $flavors = array();

                foreach($pizza["pizza_flavors"] as $flavor) {
                    $flavors[] = $flavor->id;
                }

                $pizzaTemp = [
                    "order_id" => $billing->id,
                    "pizza_size_id" => $pizza["pizza_size"]->id,
                    "qty" => $pizza["qty"],
                    "flavors" => $flavors,
                    "unit_price" => $pizza["unit_price"],
                    "total_price" => $pizza["total_price"],
                ];

                array_push($pizzas, Pizza::create($pizzaTemp));
            }


            return response()->json([
                $billing, $pizzas, "message" => "Created successfully"
            ]);
        } catch (Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Não foi possível salvar seu pedido. Tente novamente"
            ]);
        }
    }

    protected function getTenantUnitOrFail() {
        return $this->tenant->restaurants()->where('unit_url_prefix', Route::current()->unit_url_prefix)->firstOrFail();
    }
}
