<?php

namespace App\Repositories\Approach;

use App\Models\Approach;
use Illuminate\Database\Eloquent\Model;

class ApproachEloquentRepository implements ApproachRepositoryInterface
{
    public function create(array $data): ?Model
    {
        return Approach::query()->create($data);
    }
}
