<?php

namespace App\Http\Controllers;

use App\Http\Requests\Training\IndexRequest;
use App\Http\Requests\Training\StoreRequest;
use App\Http\Resources\TrainingResource;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\Training;
use App\Services\Training\TrainingServiceInterface;

class TrainingController extends Controller
{
    public function __construct(
        protected TrainingServiceInterface $trainingService
    )
    {
    }

    public function index(IndexRequest $request): SuccessResponse
    {
        $trainings = $this->trainingService->getPaginatedList(
            $request->user()->id,
            ['exercises.exercise.muscleGroup', 'exercises.approaches'],
            $request->filters(),
        );

        return new SuccessResponse([
            'payload' => TrainingResource::collection($trainings)
        ]);
    }

    public function get(Training $training): SuccessResponse
    {
        return new SuccessResponse([
            'payload' => TrainingResource::make($training)
        ]);
    }

    public function store(StoreRequest $request): SuccessResponse
    {
        $training = Training::query()->create([
            'name'    => $request->get('name'),
            'user_id' => $request->user()->id,
        ]);

        return new SuccessResponse([
            'payload' => TrainingResource::make($training)
        ]);
    }

    public function destroy(Training $training): SuccessResponse|FailResponse
    {
        return $this->trainingService->delete($training)
            ? new SuccessResponse()
            : new FailResponse();
    }
}
