<?php

namespace App\Repositories\Training;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface TrainingRepositoryInterface
{

    /**
     * @param array $data
     *
     * @return Training $training
     */
    public function create(array $data): Model;

    /**
     * @param Training $training
     * @param array $data
     * @return bool
     */
    public function update(Training $training, array $data): bool;

    /**
     * @param int $userID
     * @param int $perPage
     * @param array $with
     * @param array $filters
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(int $userID, int $perPage, array $with = [], array $filters = []): LengthAwarePaginator;

    /**
     * @param int $ID
     * @param array $with
     *
     * @return Training
     */
    public function getTraining(int $ID, array $with = []): Model;

    /**
     * @param Training $training
     *
     * @return bool
     */
    public function delete(Training $training): bool;
}
