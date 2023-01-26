<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use App\Services\MuscleGroup\MuscleGroupServiceInterface;

class MuscleGroupController extends Controller
{
    public function __construct(
        protected MuscleGroupServiceInterface $muscleGroupService,
    )
    {
    }

    public function index(): SuccessResponse
    {
        $musclesGroups = $this->muscleGroupService->getList();

        return new SuccessResponse([
            'payload' => $musclesGroups,
        ]);
    }
}
