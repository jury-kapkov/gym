<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainingExerciseResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'exercise_id'   => $this->exercise_id,
            'exercise_name' => $this->exercise->name,
            'approaches'    => ApproachResource::collection($this->approaches),
        ];
    }
}
