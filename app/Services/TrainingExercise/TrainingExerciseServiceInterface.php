<?php

namespace App\Services\TrainingExercise;

use App\Models\Exercise;
use App\Models\Training;
use App\Models\TrainingExercise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface TrainingExerciseServiceInterface
{
    /**
     * @param array $data
     *
     * @return TrainingExercise|null
     */
    public function create(array $data): ?Model;

    /**
     * @param int $trainingID
     * @param array $with
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(int $trainingID, array $with = []): LengthAwarePaginator;

    /**
     * @param Training $training
     * @param Exercise $exercise
     * @param array $with
     *
     * @return TrainingExercise|null
     */
    public function get(Training $training, Exercise $exercise, array $with = []): ?Model;
}
