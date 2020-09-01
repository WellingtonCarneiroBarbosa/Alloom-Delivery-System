<?php

namespace App\Models\AlloomDelivery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlloomCustomer extends Model
{
    use SoftDeletes;

    protected $table = "alloom_customers";

    protected $fillable = [
        'name', 'company_name', 'company_size', 'email', 'cpf', 'phone', 'is_tester',
        'status'
    ];

    public static function testRequests() {
        return static::where('is_tester', true)->where('status', null);
    }

    public static function inProspection() {
        return static::where('status', "1");
    }
}
