<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use App\Models\Tenant\Pizza\Size;
use Illuminate\Database\Eloquent\Model;

class SizeAvailableOn extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_size_available_on";

    protected $fillable = [
        "pizza_size_id", "restaurant_id", "tenant_id"
    ];

    public function sizes() {
        return $this->hasOne(Size::class, 'id', 'pizza_size_id');
    }
}
