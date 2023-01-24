<?php

namespace App\Services\Training;

use App\Models\Training;
use Illuminate\Pagination\LengthAwarePaginator;

interface TrainingServiceInterface
{
    /**
     * @param array $data
     *
     * @return Training $training
     */
    public function create(array $data): Training;


    /**
     * @param int $userID
     * @param array $with
     * @param array $filters
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(int $userID, array $with = [], array $filters = []): LengthAwarePaginator;

    /**
     * @param int $ID
     * @param array $with
     * @return Training
     */
    public function getTraining(int $ID, array $with = []): Training;

    /**
     * @param Training $training
     *
     * @return bool
     */
    public function delete(Training $training): bool;
}
