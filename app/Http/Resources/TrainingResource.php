<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainingResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'user_id'    => $this->user_id,
            'created_at' => $this->created_at->format("Y.m.d"),
            'exercises'  => TrainingExerciseResource::collection($this->exercises),
        ];
    }
}
