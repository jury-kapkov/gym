<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;

class Training extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function scopeFilter(Builder $builder, array $filters): Builder
    {
//        return $builder
//            ->when($userID = Arr::get($filters, 'user_id'), function (Builder $builder) use ($userID) {
//                $builder->where('user_id', '=', $userID);
//            });

        return $builder;
    }

}
