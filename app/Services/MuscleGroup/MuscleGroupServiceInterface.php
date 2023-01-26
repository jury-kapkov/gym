<?php

namespace App\Services\MuscleGroup;

use Illuminate\Database\Eloquent\Collection;

interface MuscleGroupServiceInterface
{
    /**
     * @return Collection
     */
    public function getList(): Collection;
}
