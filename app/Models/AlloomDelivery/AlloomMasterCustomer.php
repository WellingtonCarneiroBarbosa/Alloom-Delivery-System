<?php

namespace App\Models\AlloomDelivery;

use Illuminate\Database\Eloquent\Model;

class AlloomMasterCustomer extends Model
{
    protected $table = "alloom_customer_users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_master', 'alloom_customer_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function master() {
        return static::where('is_master', true);
    }
}
