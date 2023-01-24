<?php

namespace App\Services\Training;

use App\Models\Training;
use App\Repositories\Training\TrainingRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class TrainingService implements TrainingServiceInterface
{
    /**
     * @param TrainingRepositoryInterface $trainingRepository
     */
    public function __construct(
        protected TrainingRepositoryInterface $trainingRepository,
    )
    {
    }

    public function create(array $data): Training
    {
        return $this->trainingRepository->create($data);
    }

    public function delete(Training $training): bool
    {
        return $this->trainingRepository->delete($training);
    }

    public function getPaginatedList(int $userID, array $with = [], array $filters = []): LengthAwarePaginator
    {
        $perPage = config('pagination.trainings_per_page');

        return $this->trainingRepository->getPaginatedList($userID, $perPage, $with, $filters);
    }

    public function getTraining(int $ID, array $with = []): Training
    {
        return $this->trainingRepository->getTraining($ID, $with);
    }
}
