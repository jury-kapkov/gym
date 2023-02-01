<?php

namespace App\Repositories\TrainingExercise;

use App\Models\TrainingExercise;
use Illuminate\Database\Eloquent\Model;

class TrainingExerciseEloquentRepository implements TrainingExerciseRepositoryInterface
{

    public function create(array $data): ?Model
    {
        return TrainingExercise::query()->create($data);
    }
}
