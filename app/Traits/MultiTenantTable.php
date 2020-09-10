<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultiTenantTable {
    protected static function bootMultiTenantTable() {
        if(auth()->check()) {
            static::creating(function ($model) {
                $model->tenant_id = auth()->id();
            });

            static::addGlobalScope('tenant_id', function (Builder $builder) {
                $builder->where('tenant_id', auth()->id());
            });
        }
    }
}

