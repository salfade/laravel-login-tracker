<?php


namespace Salfade\LoginTracker\Listeners;

use Salfade\LoginTracker\Models\LoginAttempt;

class LoginSuccess
{

    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param $user
     * @param  $remember
     * @return void
     */
    public function handle($event)
    {
        LoginAttempt::create([
            'user_id' => $event->user->id,
            'ip_address' => request()->ip(),
        ]);
    }
}
