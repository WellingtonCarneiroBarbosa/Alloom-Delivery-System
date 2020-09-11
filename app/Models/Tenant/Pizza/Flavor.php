<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_flavors";

    protected $fillable = [
        "name", "price", "label_id", "tenant_id"
    ];
}
