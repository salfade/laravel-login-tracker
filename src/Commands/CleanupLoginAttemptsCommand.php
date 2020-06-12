<?php

namespace Salfade\LoginTracker\Commands;

use Illuminate\Console\Command;

class CleanupLoginAttemptsCommand extends Command
{
    public $signature = 'login-tracker:cleanup';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
