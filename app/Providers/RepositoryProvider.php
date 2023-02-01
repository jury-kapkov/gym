<?php

namespace App\Providers;

use App\Repositories\Approach\ApproachEloquentRepository;
use App\Repositories\Approach\ApproachRepositoryInterface;
use App\Repositories\Exercise\ExercisesEloquentRepository;
use App\Repositories\Exercise\ExercisesRepositoryInterface;
use App\Repositories\MuscleGroup\MuscleGroupEloquentRepository;
use App\Repositories\MuscleGroup\MuscleGroupRepositoryInterface;
use App\Repositories\Training\TrainingEloquentRepository;
use App\Repositories\Training\TrainingRepositoryInterface;
use App\Repositories\TrainingExercise\TrainingExerciseEloquentRepository;
use App\Repositories\TrainingExercise\TrainingExerciseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            TrainingRepositoryInterface::class,
            TrainingEloquentRepository::class
        );

        $this->app->singleton(
            MuscleGroupRepositoryInterface::class,
            MuscleGroupEloquentRepository::class
        );

        $this->app->singleton(
            ExercisesRepositoryInterface::class,
            ExercisesEloquentRepository::class
        );

        $this->app->singleton(
            ApproachRepositoryInterface::class,
            ApproachEloquentRepository::class
        );

        $this->app->singleton(
            TrainingExerciseRepositoryInterface::class,
            TrainingExerciseEloquentRepository::class
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
