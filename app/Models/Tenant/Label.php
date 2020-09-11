<?php

namespace App\Models\Tenant;

use App\Models\Tenant\Pizza\Flavor;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use MultiTenantTable;

    protected $fillable = [
        "name", "tenant_id"
    ];

    public function pizzaFlavors() {
        return $this->hasMany(Flavor::class);
    }
}
