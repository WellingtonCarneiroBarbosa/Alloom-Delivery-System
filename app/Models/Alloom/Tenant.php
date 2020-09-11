<?php

namespace App\Models\Alloom;

use App\Models\Tenant\Restaurant;
use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Alloom\Tenant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tenant extends Model
{
    protected $fillable = [
        'url_prefix'
    ];

    public function setUrlPrefixAttribute($url) {
        $this->attributes['url_prefix'] = utf8_encode(strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", $url))));
    }

    public static function getTenantByUrlPrefixOrFail($tenant_url_prefix) {
        $tenant = static::where("url_prefix", $tenant_url_prefix)->firstOrFail();

        return $tenant;
    }

    public function restaurants() {
        return $this->hasMany(Restaurant::class);
    }
}
