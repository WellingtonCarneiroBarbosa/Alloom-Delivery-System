<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\FranchiseUser
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $is_master
 * @property int $tenant_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereIsMaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FranchiseUser whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FranchiseUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}
