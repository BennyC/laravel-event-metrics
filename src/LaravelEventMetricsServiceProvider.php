<?php

namespace BennyC\LaravelEventMetrics;

use BennyC\LaravelEventMetrics\Commands\LaravelEventMetricsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelEventMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-event-metrics')
            ->hasConfigFile('config');
    }
}
