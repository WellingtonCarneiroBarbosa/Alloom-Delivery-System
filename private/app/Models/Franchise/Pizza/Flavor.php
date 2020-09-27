<?php

namespace App\Models\Franchise\Pizza;

use App\Models\Franchise\Label;
use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_flavors";

    protected $fillable = [
        "name", "label_id", "description", "franchise_id"
    ];

    public function prices() {
        $this->hasMany(FlavorPrice::class, "pizza_flavor_id", "id");
    }

    public function label() {
        return $this->belongsTo(Label::class, "label_id", "id");
    }
}
