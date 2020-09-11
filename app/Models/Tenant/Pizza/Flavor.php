<?php

namespace App\Models\Tenant\Pizza;

use App\Models\Tenant\Label;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant\Pizza\FlavorAvailableOn;

class Flavor extends Model
{
    use MultiTenantTable;

    protected $table = "pizza_flavors";

    protected $fillable = [
        "name", "price", "label_id", "tenant_id"
    ];

    public function flavorAvailableOn() {
        return $this->belongsTo(FlavorAvailableOn::class);
    }

    public function label() {
        return $this->belongsTo(Label::class);
    }
}
