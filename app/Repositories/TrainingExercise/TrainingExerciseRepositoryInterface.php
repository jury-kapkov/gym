<?php

namespace App\Repositories\TrainingExercise;


use App\Models\TrainingExercise;
use Illuminate\Database\Eloquent\Model;

interface TrainingExerciseRepositoryInterface
{
    /**
     * @param array $data
     * @return TrainingExercise|null
     */
    public function create(array $data): ?Model;
}
