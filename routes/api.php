<?php

use App\Http\Controllers\ApproachController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MuscleGroupController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingExerciseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:sanctum'])->group(function(){
    Route::apiResource('trainings', TrainingController::class);
    Route::apiResource('trainings-exercises', TrainingExerciseController::class);
    Route::apiResource('trainings-exercises/{trainings_exercise}/approaches', ApproachController::class);

    Route::get('muscle-group/{muscle_group}/exercises', [ExerciseController::class, 'index']);
    Route::get('muscle-group', [MuscleGroupController::class, 'index']);
});

