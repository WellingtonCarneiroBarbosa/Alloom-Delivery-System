<?php

namespace App\Models\Tenant;

use App\Models\Alloom\Tenant;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use MultiTenantTable;

    protected $table = "tenant_configurations";

    protected $fillable = [
        "tenant_id", "price_per_pizza_size"
    ];

    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }
}
