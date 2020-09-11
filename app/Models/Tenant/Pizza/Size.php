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
        "name", "max_flavors", "pieces", "tenant_id"
    ];

    public function sizeAvailableOn() {
        return $this->belongsTo(SizeAvailableOn::class);
    }
}
