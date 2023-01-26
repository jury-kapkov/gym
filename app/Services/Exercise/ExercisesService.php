<?php

namespace App\Services\Exercise;

use App\Repositories\Exercise\ExercisesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ExercisesService implements ExerciseServiceInterface
{
    public function __construct(
        protected ExercisesRepositoryInterface $exercisesRepository,
    )
    {
    }

    public function getList(int $muscleGroupID): Collection
    {
        return $this->exercisesRepository->getList($muscleGroupID);
    }
}
