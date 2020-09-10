<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;
use App\Models\AlloomDelivery\AlloomCustomers\Products\Product;

class HomeController extends Controller {

    protected $_param;

    public function __construct(Request $request)
    {
        $this->tenant_company = $request->route()->parameter('tenant_company');

        $this->tenant = AlloomCustomer::urlPrefix($this->tenant_company)->first();

        if(! $this->tenant) {
            abort(404);
        }
    }

    public function index() {
        if(count($this->tenant->restaurants) > 1) {
            return view('front.chooseRestaurant', [
                'tenant' => $this->tenant
            ]);
        } else {
            $this->tenant->products;

            return view('front.index', [
                'tenant' => $this->tenant,
            ]);
        }
    }

    public function cart() {
        $this->tenant->products;

        return view('front.cart', [
            'tenant' => $this->tenant,
        ]);
    }

    public function location() {
        $this->tenant->products;

        return view('front.location', [
            'tenant' => $this->tenant,
        ]);
    }


    public function cookies() {
        $this->tenant->products;

        return view('front.cookies', [
            'tenant' => $this->tenant,
        ]);
    }

    public function home() {
        $this->tenant->products;

        return view('front.home', [
            'tenant' => $this->tenant,
        ]);
    }
}
