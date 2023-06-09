<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApproachResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'     => $this->id,
            'count'  => $this->count,
            'weight' => $this->weight,
        ];
    }
}
