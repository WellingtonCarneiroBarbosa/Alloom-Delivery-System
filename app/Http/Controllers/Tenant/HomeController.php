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
        $this->tenant->products;
        return response()->json([
            'tenant' => $this->tenant,
        ]);
    }
}
