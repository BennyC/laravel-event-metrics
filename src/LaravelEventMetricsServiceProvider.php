<?php

namespace BennyC\LaravelEventMetrics;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BennyC\LaravelEventMetrics\Commands\LaravelEventMetricsCommand;

class LaravelEventMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-event-metrics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-event-metrics_table')
            ->hasCommand(LaravelEventMetricsCommand::class);
    }
}