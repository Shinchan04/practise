<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Life extends Model
{
    protected $guarded = ['id'];
    protected $table = "life";
    protected $casts = ['images' => 'array'];
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('status', function (Builder $builder) {
            $builder->where('status', 'Active');
            $builder->whereIn('platform', ['SLCM','BOTH']);
        });
    }


}
