<?php

namespace App\Models\Tenant\Order;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use MultiTenantTable;

    protected $table = "orders";

    protected $fillable = [
        "billing_id", "billing_name", "billing_phone", "billing_cep", "billing_complement",
        "discount_code_id", "pick_up_at_the_counter", "order_status_id", "delivery_fee",
        "totalPrice", "totalQuantity", "franchise_id"
    ];
}
