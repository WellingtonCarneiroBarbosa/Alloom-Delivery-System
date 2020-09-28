<?php

namespace App\Models\Franchise\Order;

use App\Models\Franchise\Pizza\Size;
use App\Models\Franchise\Pizza\Flavor;
use Illuminate\Database\Eloquent\Model;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;

class Pizza extends Model
{
    protected $table = "pizza_order";

    protected $fillable = [
        "pizza_size_id", "pizza_border_id", "pizza_flavors_id", "quantity", "details", "total_price",
        "order_id"
    ];

    protected $casts = [
        "pizza_flavors_id" => "array"
    ];

    public function borderPrice() {
        return $this->hasOne(BorderPrice::class, "id", "pizza_border_id");
    }

    public function size() {
        return $this->hasOne(Size::class, "id", "pizza_size_id");
    }

    public function getFlavors() {
        return Flavor::whereIn("id", $this->pizza_flavors_id)->get();
    }
}
