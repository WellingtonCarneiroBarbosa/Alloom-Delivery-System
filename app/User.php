<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\AlloomDelivery\AlloomCustomer;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

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

    public function getRole() {
        return __("roles.{$this->roles[0]->guard_name}.{$this->roles[0]->name}");
    }

    public function tenant() {
        return $this->hasOne(AlloomCustomer::class, 'id', 'alloom_customer_id');
    }
}
