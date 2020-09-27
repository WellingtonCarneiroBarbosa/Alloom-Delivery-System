<?php

namespace App\Models\Franchise;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use MultiFranchiseTable;

    protected $fillable = [
        "name", "franchise_id"
    ];
}
