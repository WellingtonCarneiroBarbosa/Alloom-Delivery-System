<?php

namespace App\Models\AlloomCustomers\Restaurants;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use MultiTenantTable;

    protected $table = "alloom_customer_restaurants";

    protected $fillable = [
        'name', 'address', 'opens_at', 'closes_at',
    ];
}
