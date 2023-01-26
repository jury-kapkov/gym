<?php

namespace App\Services\MuscleGroup;

use App\Repositories\MuscleGroup\MuscleGroupRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MuscleGroupService implements MuscleGroupServiceInterface
{
    public function __construct(
        protected MuscleGroupRepositoryInterface $groupRepository
    )
    {
    }

    public function getList(): Collection
    {
        return $this->groupRepository->getList();
    }
}
