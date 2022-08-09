<?php

declare(strict_types=1);

namespace Activity;


use Illuminate\Support\ServiceProvider;

class ActivityServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->register(ActivityEventServiceProvider::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
            __DIR__.'/../config/activity-package.php' => config_path()
        ]);
        
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');

        $this->mergeConfigFrom(
            __DIR__.'/../config/activity-package.php',
            'activity-package'
        );
    }
}