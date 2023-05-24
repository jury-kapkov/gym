<?php

namespace App\Http\Controllers;

use App\Http\Requests\Approach\StoreRequest;
use App\Http\Requests\Approach\UpdateRequest;
use App\Http\Resources\ApproachResource;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\Approach;
use App\Models\TrainingExercise;
use App\Services\Approach\ApproachServiceInterface;
use App\Services\TrainingExercise\TrainingExerciseServiceInterface;

class ApproachController extends Controller
{
    public function __construct(
        protected TrainingExerciseServiceInterface $exerciseService,
        protected ApproachServiceInterface         $approachService,
    )
    {
    }

    public function index(TrainingExercise $trainingExercise): SuccessResponse|FailResponse
    {
        $approaches = $this->approachService->getPaginatedList(
            $trainingExercise->id,
        );

        return new SuccessResponse([
            'payload' => ApproachResource::collection($approaches),
        ]);
    }

    public function store(StoreRequest $request, TrainingExercise $trainingExercise): SuccessResponse|FailResponse
    {
        $approach = $this->approachService->create([
            'training_exercise_id' => $trainingExercise->id,
            ...$request->validated(),
        ]);

        return new SuccessResponse([
            'payload' => ApproachResource::make($approach),
        ]);
    }

    public function update(
        UpdateRequest $request,
        TrainingExercise $trainingExercise,
        Approach $approach
    ): SuccessResponse|FailResponse
    {
        $isUpdated = $this->approachService->update(
            $approach,
            $request->validated(),
        );

        return $isUpdated
            ? new SuccessResponse()
            : new FailResponse();
    }

    public function destroy(TrainingExercise $trainingExercise, Approach $approach): SuccessResponse|FailResponse
    {
        $isDeleted = $this->approachService->delete($approach);

        return $isDeleted
            ? new SuccessResponse()
            : new FailResponse();
    }
}
