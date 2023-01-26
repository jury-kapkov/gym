<?php

namespace App\Repositories\Exercise;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Collection;

class ExercisesEloquentRepository implements ExercisesRepositoryInterface
{
    public function getList(int $muscleGroupID): Collection
    {
        return Exercise::query()
            ->where('muscle_group_id', '=', $muscleGroupID)
            ->get();
    }
}
