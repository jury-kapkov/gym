<?php

namespace App\Repositories\MuscleGroup;

use App\Models\MuscleGroup;
use Illuminate\Database\Eloquent\Collection;

class MuscleGroupEloquentRepository implements MuscleGroupRepositoryInterface
{
    public function getList(): Collection
    {
        return MuscleGroup::query()->get();
    }
}
