<?php

namespace App\Models\Tenant\Order;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use MultiTenantTable;

    protected $table = "order_pizzas";

    protected $fillable = [
        "pizza_size_id", "flavors", "unit_price", "total_price", "qty", "order_id"
    ];

    protected $casts = [
        "flavors" => "array"
    ];
}
