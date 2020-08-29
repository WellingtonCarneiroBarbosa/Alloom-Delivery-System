<?php

namespace App\Models\AlloomCustomers\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "alloom_customer_products";

    protected $fillable = [
        'name', 'price', 'alloom_customer_id',
    ];
}
