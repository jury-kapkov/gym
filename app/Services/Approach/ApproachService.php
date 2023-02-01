<?php

namespace App\Services\Approach;

use App\Models\Approach;
use App\Repositories\Approach\ApproachRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ApproachService implements ApproachServiceInterface
{
    public function __construct(
        protected ApproachRepositoryInterface $approachRepository,
    )
    {
    }

    public function create(array $data): ?Model
    {
        return $this->approachRepository->create($data);
    }

    public function getPaginatedList(int $trainingExerciseID, array $with = []): LengthAwarePaginator
    {
        $perPage = config('pagination.approaches_per_page');

        return Approach::query()
            ->where('training_exercise_id', '=', $trainingExerciseID)
            ->with($with)
            ->paginate($perPage);
    }
}
