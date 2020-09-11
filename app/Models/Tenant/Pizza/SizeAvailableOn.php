<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class SizeAvailableOn extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_size_available_on";

    protected $fillable = [
        "pizza_size_id", "restaurant_id", "tenant_id"
    ];
}
