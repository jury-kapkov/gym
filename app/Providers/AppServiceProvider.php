<?php

namespace App\Providers;

use App\Services\Approach\ApproachService;
use App\Services\Approach\ApproachServiceInterface;
use App\Services\Exercise\ExercisesService;
use App\Services\Exercise\ExerciseServiceInterface;
use App\Services\MuscleGroup\MuscleGroupService;
use App\Services\MuscleGroup\MuscleGroupServiceInterface;
use App\Services\Training\TrainingService;
use App\Services\Training\TrainingServiceInterface;
use App\Services\TrainingExercise\TrainingExerciseService;
use App\Services\TrainingExercise\TrainingExerciseServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            TrainingServiceInterface::class,
            TrainingService::class
        );

        $this->app->singleton(
            MuscleGroupServiceInterface::class,
            MuscleGroupService::class
        );

        $this->app->singleton(
            ExerciseServiceInterface::class,
            ExercisesService::class
        );

        $this->app->singleton(
            ApproachServiceInterface::class,
            ApproachService::class
        );

        $this->app->singleton(
            TrainingExerciseServiceInterface::class,
            TrainingExerciseService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
