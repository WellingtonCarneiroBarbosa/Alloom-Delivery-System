<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

class BorderAvailableOn extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_border_type_available_on";

    protected $fillable = [
        "pizza_border_type_id", "restaurant_id", "tenant_id"
    ];

    public function borders() {
        return $this->hasOne(Border::class, 'id', 'pizza_border_type_id');
    }
}
