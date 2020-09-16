<?php

namespace App\Models\Franchise\Pizza;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    use MultiFranchiseTable;

    protected $table = "pizza_flavors";

    protected $fillable = [
        "name", "label_id", "description", "franchise_id"
    ];
}
