<?php

namespace App\Models\Franchise\Pizza;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Border extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_borders";

    protected $fillable = [
        "name", "description", "franchise_id"
    ];

    public function prices() {
        $this->hasMany(BorderPrice::class, "pizza_border_id", "id");
    }
}
