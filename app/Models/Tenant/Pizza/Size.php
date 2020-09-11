<?php

namespace App\Models\Tenant\Pizza;

use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant\Pizza\SizeAvailableOn;

class Size extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_sizes";

    protected $fillable = [
        "name", "tenant_id"
    ];

    public function sizeAvailableOn() {
        return $this->hasMany(SizeAvailableOn::class);
    }
}
