<?php

namespace App\Services\Approach;

use App\Models\Approach;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface ApproachServiceInterface
{
    /**
     * @param array $data
     *
     * @return Approach|null
     */
    public function create(array $data): ?Model;

    /**
     * @param int $trainingExerciseID
     * @param array $with
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(int $trainingExerciseID, array $with = []): LengthAwarePaginator;

    /**
     * @param Approach $approach
     * @param array $data
     *
     * @return bool
     */
    public function update(Approach $approach, array $data): bool;

    /**
     * @param Approach $approach
     *
     * @return bool
     */
    public function delete(Approach $approach): bool;
}
