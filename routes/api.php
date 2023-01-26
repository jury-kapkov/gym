<?php

use App\Http\Controllers\ApproachController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MuscleGroupController;
use App\Http\Controllers\TrainingController;
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

Route::apiResources([
    'trainings'    => TrainingController::class,
    'trainings/{training}/approaches' => ApproachController::class,
    'muscle-group/{muscle_group}/exercises' => ExerciseController::class
]);

Route::get('muscle-group', [MuscleGroupController::class, 'index']);

