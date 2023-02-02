<?php

namespace App\Repositories\Approach;

use App\Models\Approach;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ApproachEloquentRepository implements ApproachRepositoryInterface
{
    public function create(array $data): ?Model
    {
        return Approach::query()->create($data);
    }

    public function getPaginatedList(int $trainingExerciseID, int $perPage, array $with = []): LengthAwarePaginator
    {
        return Approach::query()
            ->where('training_exercise_id', '=', $trainingExerciseID)
            ->with($with)
            ->paginate($perPage);
    }

    public function update(Approach $approach, array $data): bool
    {
        $approach->update($data);
    }

    public function delete(Approach $approach): bool
    {
        return !!$approach->delete();
    }
}
