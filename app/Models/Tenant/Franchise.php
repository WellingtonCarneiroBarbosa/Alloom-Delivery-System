<?php

namespace App\Models\Tenant;

use App\Models\Alloom\Tenant;
use App\Models\Tenant\Pizza\BorderAvailableOn;
use App\Models\Tenant\Pizza\FlavorAvailableOn;
use App\Models\Tenant\Pizza\SizeAvailableOn;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tenant\Franchise
 *
 * @property int $id
 * @property string $name
 * @property int $tenant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Franchise whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Franchise extends Model
{
    use MultiTenantTable;

    protected $fillable = [
        "name", "url_prefix", "tenant_id"
    ];

    public static function getUnitByUrlPrefixOrFail($url_prefix)  {
        return static::where('url_prefix', $url_prefix)->firstOrFail();
    }

    public function setUnitUrlPrefixAttribute($url) {
        $this->attributes['url_prefix'] = utf8_encode(strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", $url))));
    }
}
