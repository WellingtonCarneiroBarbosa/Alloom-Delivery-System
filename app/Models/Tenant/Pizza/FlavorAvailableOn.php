<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use App\Models\Tenant\Pizza\Flavor;
use Illuminate\Database\Eloquent\Model;

class FlavorAvailableOn extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_flavor_available_on";

    protected $fillable = [
        "pizza_flavor_id", "restaurant_id", "tenant_id"
    ];

    public function flavors() {
        return $this->hasOne(Flavor::class, 'id', 'pizza_flavor_id');
    }
}
