<?php

namespace App\Repositories\MuscleGroup;

use Illuminate\Database\Eloquent\Collection;

interface MuscleGroupRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getList(): Collection;
}
