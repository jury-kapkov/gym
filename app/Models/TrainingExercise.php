<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrainingExercise extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }
    public function approaches(): HasMany
    {
        return $this->hasMany(Approach::class);
    }
    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
}
