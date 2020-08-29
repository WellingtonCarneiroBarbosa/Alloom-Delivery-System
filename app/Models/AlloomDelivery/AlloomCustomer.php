<?php

namespace App\Models\AlloomDelivery;

use Illuminate\Database\Eloquent\Model;

class AlloomCustomer extends Model
{
    protected $table = "alloom_customers";

    protected $fillable = [
        'name', 'email', 'cpf', 'phone'
    ];
}
