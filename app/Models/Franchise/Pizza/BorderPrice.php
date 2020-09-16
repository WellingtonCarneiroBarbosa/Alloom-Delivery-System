<?php

namespace App\Models\Franchise\Pizza;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class BorderPrice extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_border_prices";

    protected $fillable = [
        "pizza_border_id", "pizza_size_id", "price", "franchise_id"
    ];
}
