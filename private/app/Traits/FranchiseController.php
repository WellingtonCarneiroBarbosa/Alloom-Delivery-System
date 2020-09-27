<?php

namespace App\Traits;

use App\Models\Alloom\Tenant;
use Illuminate\Support\Facades\Route;

trait FranchiseController
{
    protected $tenant;

    protected function getTenantFranchiseOrFail() {
        $this->tenant = \Request::get("tenant");

        return \Request::get("franchise");
    }
}
