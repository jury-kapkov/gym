<?php

namespace App\Services\TrainingExercise;

use App\Models\Exercise;
use App\Models\TrainingExercise;
use App\Models\Training;
use App\Repositories\TrainingExercise\TrainingExerciseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class TrainingExerciseService implements TrainingExerciseServiceInterface
{
    public function __construct(
        protected TrainingExerciseRepositoryInterface $exerciseRepository
    )
    {
    }

    public function create(array $data): TrainingExercise
    {
        return $this->exerciseRepository->create($data);
    }

    public function getPaginatedList(int $trainingID, array $with = []): LengthAwarePaginator
    {
        $perPage = config('pagination.training_exercises_per_page');

        return TrainingExercise::query()
            ->where('training_id', '=', $trainingID)
            ->with($with)
            ->paginate($perPage);
    }

    public function get(Training $training, Exercise $exercise, array $with = []): ?Model
    {
        return $training->exercises()
            ->where('exercise_id', '=', $exercise->id)
            ->with($with)
            ->first();
    }
}
