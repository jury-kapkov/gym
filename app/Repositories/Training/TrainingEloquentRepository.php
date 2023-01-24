<?php

namespace App\Repositories\Training;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class TrainingEloquentRepository implements TrainingRepositoryInterface
{
    public function delete(Training $training): bool
    {
        return !!$training->delete();
    }

    public function create(array $data): Model
    {
        return Training::query()->create($data);
    }

    public function update(Training $training, array $data): bool
    {
        return $training->update($data);
    }

    public function getPaginatedList(int $userID, int $perPage, array $with = [], array $filters = []): LengthAwarePaginator
    {
        return Training::query()
            ->where('user_id', '=', $userID)
            ->with($with)
            ->filter($filters)
            ->paginate($perPage);
    }

    public function getTraining(int $ID, array $with = []): Model
    {
        return Training::query()
            ->where('id', '=', $ID)
            ->with($with)
            ->first();
    }
}
