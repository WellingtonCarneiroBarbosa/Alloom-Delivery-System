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
     * |   2    |  completed  |
     * |   3    |  delivering |
     * |   4    |  delivered  |
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

    public static function completed() {
        return static::where("confirmed_by_receiver", "1")->where("status", "2")->orderBy("updated_at", "ASC");
    }

    public static function delivering() {
        return static::where("confirmed_by_receiver", "1")->where("status", "3")->orderBy("updated_at", "ASC");
    }

    public static function delivered() {
        return static::where("confirmed_by_receiver", "1")->where("status", "4")->orderBy("updated_at", "ASC");
    }

    public static function canceled() {
        return static::where("confirmed_by_receiver", "1")->where("status", "5")->orderBy("updated_at", "ASC");
    }

    public function pizzas() {
        return $this->hasMany(Pizza::class, "order_id", "id");
    }
}
