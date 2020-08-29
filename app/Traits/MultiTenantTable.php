<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;


trait MultiTenantTable {
    protected static function bootMultiTenantTable() {
        if (auth()->check()) {
            static::creating(function ($model) {
                $model->alloom_customer_id = auth()->id();
            });

            static::addGlobalScope('alloom_customer_id', function (Builder $builder) {
                $builder->where('alloom_customer_id', auth()->id());
            });
        }
    }
}
