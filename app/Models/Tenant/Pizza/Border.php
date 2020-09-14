<?php

namespace App\Models\Tenant\Pizza;

use App\Models\Alloom\Tenant;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant\Pizza\BorderPrice;

class Border extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_border_types";

    protected $fillable = [
        "name", "tenant_id"
    ];

    public function tenant() {
        return $this->belongsTo(Tenant::class, "tenant_id", "id");
    }

    public function borderAvailableOn() {
        return $this->belongsTo(BorderAvailableOn::class);
    }

    public function prices() {
        return $this->hasMany(BorderPrice::class, "pizza_border_type_id", "id");
    }
}
