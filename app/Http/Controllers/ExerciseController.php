<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExerciseResource;
use App\Http\Responses\SuccessResponse;
use App\Models\MuscleGroup;
use App\Services\Exercise\ExerciseServiceInterface;

class ExerciseController extends Controller
{
    public function __construct(
        protected ExerciseServiceInterface $exerciseService,
    )
    {
    }

    public function index(MuscleGroup $muscleGroup): SuccessResponse
    {
        $exercises = $this->exerciseService->getList($muscleGroup->id);

        return new SuccessResponse([
            'payload' => ExerciseResource::collection($exercises),
        ]);
    }
}
