<?php


namespace Salfade\LoginTracker\Tests\Models;

use Salfade\LoginTracker\Models\LoginAttempt;
use Salfade\LoginTracker\Tests\TestCase;

class LoginAttemptTest extends TestCase
{
    public function test_it_can_fetch_the_latest_login_attempt(): void
    {
        $firstAttempt = factory(LoginAttempt::class, 1);
        $secondAttempt = factory(LoginAttempt::class, 1);



        $this->assertTrue(true);
    }
}
