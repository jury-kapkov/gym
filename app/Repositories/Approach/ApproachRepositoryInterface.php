<?php

namespace App\Repositories\Approach;

use App\Models\Approach;
use Illuminate\Database\Eloquent\Model;

interface ApproachRepositoryInterface
{
    /**
     * @param array $data
     *
     * @return Approach|null
     */
    public function create(array $data): ?Model;
}
