<?php

namespace App\Http\Controllers\AlloomDelivery\Tests;

use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;

class TestController extends Controller {
    /**
     * @var object
     */
    private $tenant;

    /**
     * Create a new controller instance.
     *
     * @param App\Models\AlloomDelivery\AlloomCustomer $tenant
     */
    public function __construct(AlloomCustomer $tenant) {
        $this->tenant = $tenant;
    }

    public function changeStatusToInProspection($tenant) {
        try {
            $this->tenant->findOrFail($tenant)->update(['status' => 1]);

            return redirect()->route('alloom_user.home')->with(['success' => __('success.status')]);
        } catch(\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());

            return redirect()->route('alloom_user.home')->with(['error' => __('exceptions.error')]);
        }
    }

    public function inProspectionTests() {
        $tenants = $this->tenant->inProspection()->get();

        return view('alloom.customers.inProspection', [
            'inProspectionCustomers' => $tenants
        ]);
    }
}
