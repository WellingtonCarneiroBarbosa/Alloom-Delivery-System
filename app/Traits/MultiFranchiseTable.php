<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultiFranchiseTable {
    protected static function bootMultiFranchiseTable() {
        if(auth()->check()) {
            static::creating(function ($model) {
                $model->franchise_id = auth()->id();
            });

            static::addGlobalScope('franchise_id', function (Builder $builder) {
                $builder->where('franchise_id', auth()->id());
            });
        }
    }
}

