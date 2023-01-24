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
    'muscle-group' => MuscleGroupController::class,
]);

Route::apiResources(['trainings/{training}/approaches' => ApproachController::class]);
Route::apiResources(['muscle-group/{muscle-group}/exercises' => ExerciseController::class]);

