<?php

namespace App\Services\Exercise;

use Illuminate\Database\Eloquent\Collection;

interface ExerciseServiceInterface
{
    /**
     * @param int $muscleGroupID
     *
     * @return Collection
     */
    public function getList(int $muscleGroupID): Collection;
}
