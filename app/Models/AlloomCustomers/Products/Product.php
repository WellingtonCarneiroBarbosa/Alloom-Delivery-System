<?php

namespace App\Models\AlloomCustomers\Products;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use MultiTenantTable;

    protected $table = "alloom_customer_products";

    protected $fillable = [
        'name', 'price', 'alloom_customer_id',
    ];
}
