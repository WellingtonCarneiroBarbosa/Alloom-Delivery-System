<?php

namespace App\Models\Franchise;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use MultiFranchiseTable;

    protected $table = "franchise_configurations";

    protected $fillable = [
        "minimum_order", "franchise_id"
    ];
}
