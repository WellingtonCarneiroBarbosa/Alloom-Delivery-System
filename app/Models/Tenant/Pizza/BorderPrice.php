<?php

namespace App\Models\Tenant\Pizza;

use Illuminate\Database\Eloquent\Model;

class BorderPrice extends Model
{
    protected $table = "pizza_border_prices";

    protected $fillable = [
        "pizza_border_type_id", "pizza_size_id", "price"
    ];

    public function sizes() {
        return $this->belongsTo(Size::class, "pizza_size_id", "id");
    }

    public function borders() {
        return $this->belongsTo(Border::class, "id", "pizza_border_type_id");
    }
}
