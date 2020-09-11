<?php

namespace App\Models\Tenant;

use App\Models\Alloom\Tenant;
use App\Traits\MultiTenantTable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tenant\Restaurant
 *
 * @property int $id
 * @property string $name
 * @property int $tenant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Restaurant extends Model
{
    use MultiTenantTable;

    protected $fillable = [
        "unit_name", "unit_url_prefix", "tenant_id"
    ];

    public static function getUnitByUrlPrefixOrFail($unit_url_prefix)  {
        return static::where('unit_url_prefix', $unit_url_prefix)->firstOrFail();
    }

    public function setUnitUrlPrefixAttribute($url) {
        $this->attributes['unit_url_prefix'] = utf8_encode(strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ", "-", $url))));
    }

    public function tenant() {
        $this->belongsTo(Tenant::class);
    }
}
