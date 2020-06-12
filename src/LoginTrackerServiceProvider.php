<?php

namespace Salfade\LoginTracker;

use Illuminate\Support\ServiceProvider;
use Salfade\LoginTracker\Commands\CleanupLoginAttemptsCommand;

class LoginTrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/login-tracker.php' => config_path('login-tracker.php'),
            ], 'config');


            if (! class_exists('CreateLoginAttemptTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_login_attempts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_login_attempts_table.php'),
                ], 'migrations');
            }

            $this->commands([
                CleanupLoginAttemptsCommand::class,
            ]);
        }


    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/login-tracker.php', 'login-tracker');
    }
}
