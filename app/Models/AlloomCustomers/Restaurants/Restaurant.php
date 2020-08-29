<?php

namespace App\Models\AlloomCustomers\Restaurants;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "alloom_customer_restaurants";

    protected $fillable = [
        'name', 'address', 'opens_at', 'closes_at',
    ];
}
