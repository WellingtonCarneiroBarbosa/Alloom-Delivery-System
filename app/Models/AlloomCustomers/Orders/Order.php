<?php

namespace App\Models\AlloomCustomers\Orders;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "alloom_customer_orders";

    protected $fillable = [
        'name', 'address', 'product_id', 'status', 'alloom_customer_restaurant_id'
    ];

    /**
     * Get all pending orders.
     *
     */
    public static function pending() {
        return Order::where('status', null)->orderBy('created_at', 'ASC');
    }

    /**
     * Get all in progress orders.
     *
     */
    public static function inProgress() {
        return Order::where('status', 1)->orderBy('created_at', 'ASC');
    }

     /**
     * Get all completed orders.
     *
     */
    public static function completed() {
        return Order::where('status', 2)->orderBy('created_at', 'ASC');
    }
}
