<?php

namespace App\Providers;

use App\Services\Exercise\ExercisesService;
use App\Services\Exercise\ExerciseServiceInterface;
use App\Services\MuscleGroup\MuscleGroupService;
use App\Services\MuscleGroup\MuscleGroupServiceInterface;
use App\Services\Training\TrainingService;
use App\Services\Training\TrainingServiceInterface;
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
