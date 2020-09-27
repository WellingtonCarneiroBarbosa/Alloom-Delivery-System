<?php

namespace App\Models\Franchise\Order;

use App\Traits\MultiFranchiseTable;
use Illuminate\Database\Eloquent\Model;

class DeliveryFee extends Model
{
    use MultiFranchiseTable;

    protected $table = "delivery_fee";

    protected $fillable = [
        "fee_per_km", "maximum_delivery_distance_in_km", "default_fee",
        "franchise_id"
    ];
}
