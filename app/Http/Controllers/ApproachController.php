<?php

namespace App\Http\Controllers;

use App\Http\Requests\Approach\StoreRequest;
use App\Http\Resources\ApproachResource;
use App\Http\Responses\SuccessResponse;
use App\Models\Exercise;
use App\Models\Training;
use App\Models\TrainingExercise;
use App\Services\Approach\ApproachServiceInterface;
use App\Services\TrainingExercise\TrainingExerciseServiceInterface;
use Illuminate\Http\JsonResponse;

class ApproachController extends Controller
{
    public function __construct(
        protected TrainingExerciseServiceInterface $exerciseService,
        protected ApproachServiceInterface $approachService,
    )
    {
    }

    public function store(StoreRequest $request, TrainingExercise $trainingExercise): JsonResponse
    {
        $approach = $this->approachService->create([
            'training_exercise_id' => $trainingExercise->id,
            ...$request->validated(),
        ]);

        return new SuccessResponse([
            'payload' => ApproachResource::make($approach),
        ]);
    }

    public function index(TrainingExercise $trainingExercise): JsonResponse
    {
        $approaches = $this->approachService->getPaginatedList(
            $trainingExercise->id,
        );

        return new SuccessResponse([
            'payload' => ApproachResource::collection($approaches),
        ]);
    }
}
