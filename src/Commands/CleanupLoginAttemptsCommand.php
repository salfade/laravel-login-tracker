<?php

namespace Salfade\LoginTracker\Commands;

use Illuminate\Console\Command;

class CleanupLoginAttemptsCommand extends Command
{
    public $signature = 'login-tracker:cleanup {noOfDays?}';

    public $description = 'My command';

    public function handle()
    {
    }
}
