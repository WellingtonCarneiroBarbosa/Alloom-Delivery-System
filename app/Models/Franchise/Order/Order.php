<?php

namespace App\Models\Franchise\Order;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     *      ORDER STATUS
     * ------------------------
     * | status |   caption   |
     * |  null  |   pending   |
     * |   1    | in progress |
     * |   2    |  concluido  |
     * |   3    |  a caminho  |
     * |   4    |  entregue   |
     * |   5    |  canceled   |
     * ------------------------
     */

    use MultiFranchiseTable;

    protected $table = "orders";

    protected $fillable = [
        "receiver_id", "receiver_name", "receiver_phone", "receiver_address", "confirmed_by_receiver",
        "discount_code_id", "pick_up_at_the_counter", "status", "delivery_fee",
        "totalPrice", "totalQuantity", "franchise_id", "access_key"
    ];

    public static function pending() {
        return static::where("confirmed_by_receiver", "1")->where("status", null)->orderBy("updated_at", "ASC");
    }

    public static function inProgress() {
        return static::where("confirmed_by_receiver", "1")->where("status", "1")->orderBy("updated_at", "ASC");
    }

    public function pizzas() {
        return $this->hasMany(Pizza::class, "order_id", "id");
    }
}
