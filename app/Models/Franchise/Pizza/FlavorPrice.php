<?php

namespace App\Models\Franchise\Pizza;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class FlavorPrice extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_flavor_prices";

    protected $fillable = [
        "pizza_flavor_id", "pizza_size_id", "price", "franchise_id"
    ];

    public function flavor() {
        return $this->belongsTo(Flavor::class, "pizza_flavor_id", "id");
    }
}
