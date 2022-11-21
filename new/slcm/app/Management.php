<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Management extends Model
{
    protected $guarded = ['id'];
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('status', function (Builder $builder) {
            $builder->where('status', 'Active')->orderBy('ordering','asc');
        });
    }

}
