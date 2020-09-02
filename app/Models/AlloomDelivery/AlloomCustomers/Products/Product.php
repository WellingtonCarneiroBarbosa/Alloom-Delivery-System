<?php

namespace App\Models\AlloomDelivery\AlloomCustomers\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\AlloomDelivery\AlloomCustomer;

class Product extends Model
{

    protected $table = "alloom_customer_products";

    protected $fillable = [
        'name', 'price', 'alloom_customer_id',
    ];

    public static function tenantId($id) {
        return static::where('alloom_customer_id', $id);
    }

    public function tenant() {
        return $this->belongsTo(AlloomCustomer::class, 'alloom_customer_id');
    }
}
