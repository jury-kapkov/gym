<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Approach extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trainingExercise(): BelongsTo
    {
        return $this->belongsTo(TrainingExercise::class);
    }
}
