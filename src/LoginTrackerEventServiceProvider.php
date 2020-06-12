<?php


namespace Salfade\LoginTracker;

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Salfade\LoginTracker\Listeners\LoginSuccess;

class LoginTrackerEventServiceProvider extends EventServiceProvider
{
    protected $listen = [
        Login::class => [
            LoginSuccess::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
