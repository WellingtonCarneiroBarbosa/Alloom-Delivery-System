<?php

namespace App\Traits;

use App\Models\Alloom\Tenant;
use Illuminate\Support\Facades\Route;

trait FranchiseController
{
    protected $tenant;

    public function __construct()
    {
        $this->tenant = Tenant::getTenantByUrlPrefixOrFail(Route::current()->tenant_url_prefix);
    }

    protected function getTenantFranchiseOrFail() {
        return $this->tenant->franchises()->where('url_prefix', Route::current()->franchise_url_prefix)->firstOrFail();
    }
}
