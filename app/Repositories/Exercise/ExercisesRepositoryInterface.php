<?php

namespace App\Repositories\Exercise;

use Illuminate\Database\Eloquent\Collection;

interface ExercisesRepositoryInterface
{
    /**
     * @param int $muscleGroupID
     * @return Collection
     */
    public function getList(int $muscleGroupID): Collection;
}
