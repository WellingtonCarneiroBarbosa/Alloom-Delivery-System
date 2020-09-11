<?php

namespace App\Http\Controllers\TenantFront;

use Exception;
use App\Models\Alloom\Tenant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

    protected function getTenantUnitOrFail() {
        return $this->tenant->restaurants()->where('unit_url_prefix', Route::current()->unit_url_prefix)->firstOrFail();
    }
}
