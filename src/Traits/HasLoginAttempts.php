<?php

namespace Salfade\LoginTracker\Traits;

use Salfade\LoginTracker\Models\LoginAttempt;

trait HasLoginAttempts
{
    public function loginAttempts()
    {
        return $this->hasMany(LoginAttempt::class);
    }

    public function latestLoginAttempt()
    {
        $loginAttempt = LoginAttempt::where('user_id', $this->id)
            ->latest()
            ->take(1);

        return optional($loginAttempt->first());
    }

    public function lastLoginIp()
    {
        return $this->latestLoginAttempt()->ip_address;
    }


    public function lastLoginDate()
    {
        return $this->latestLoginAttempt()->created_at;
    }

    public function lastLoginDateForHuman()
    {
        return optional($this->latestLoginAttempt()->created_at)->diffForHumans();
    }
}
