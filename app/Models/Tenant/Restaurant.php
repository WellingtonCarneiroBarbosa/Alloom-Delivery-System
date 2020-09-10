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
        "unit_name", "tenant_id"
    ];

    public static function getUnitByNameOrFail($unit_name)  {
        return static::where('unit_name', $unit_name)->firstOrFail();
    }

    public function tenant() {
        $this->belongsTo(Tenant::class);
    }
}
