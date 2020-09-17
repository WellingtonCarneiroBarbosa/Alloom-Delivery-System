<?php

namespace App\Traits;

use App\Models\Alloom\Tenant;
use Illuminate\Support\Facades\Route;

trait FranchiseController
{
    protected $tenant;

    protected function getTenantFranchiseOrFail() {
        $this->tenant = \Request::get("tenant");
        return $this->tenant->franchises()->where('url_prefix', Route::current()->franchise_url_prefix)->firstOrFail();
    }
}
