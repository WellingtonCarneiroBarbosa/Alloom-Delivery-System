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
        'status', 'url_prefix',
    ];

    public function setUrlPrefixAttribute($url) {
        $this->attributes['url_prefix'] = utf8_encode(strtolower(str_replace(" ", "-", $url)));
    }

    public static function testRequests() {
        return static::where('is_tester', true)->where('status', null);
    }

    public static function inProspection() {
        return static::where('status', "1");
    }

    public static function urlPrefix($url) {
        return static::where('url_prefix', "LIKE", "%" . $url . "%");
    }

}
