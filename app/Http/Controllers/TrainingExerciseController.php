<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingExercise\IndexRequest;
use App\Http\Requests\TrainingExercise\StoreRequest;
use App\Http\Resources\TrainingExerciseResource;
use App\Http\Responses\SuccessResponse;
use App\Models\Exercise;
use App\Models\Training;
use App\Models\TrainingExercise;
use App\Services\TrainingExercise\TrainingExerciseServiceInterface;
use Illuminate\Http\JsonResponse;

class TrainingExerciseController extends Controller
{
    public function __construct(
        protected TrainingExerciseServiceInterface $exerciseService
    )
    {
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $trainingExercise = $this->exerciseService->create(
            $request->validated(),
        );

        return new SuccessResponse([
            'payload' => TrainingExerciseResource::make($trainingExercise)
        ]);
    }

    public function index(IndexRequest $request): JsonResponse
    {
        $trainingExercise = $this->exerciseService->getPaginatedList(
            $request->get('training_id'),
            ['approaches', 'exercise'],
        );

        return new SuccessResponse([
            'payload' => TrainingExerciseResource::collection($trainingExercise),
        ]);
    }
}
