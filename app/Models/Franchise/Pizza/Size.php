<?php

namespace App\Models\Franchise\Pizza;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_sizes";

    protected $fillable = [
        "name", "price", "max_flavors", "slices", "description", "franchise_id"
    ];
}
