<?php

namespace BennyC\LaravelEventMetrics\Commands;

use Illuminate\Console\Command;

class LaravelEventMetricsCommand extends Command
{
    public $signature = 'laravel-event-metrics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
