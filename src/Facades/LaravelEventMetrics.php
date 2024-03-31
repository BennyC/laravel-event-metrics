<?php

namespace BennyC\LaravelEventMetrics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BennyC\LaravelEventMetrics\LaravelEventMetrics
 */
class LaravelEventMetrics extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BennyC\LaravelEventMetrics\LaravelEventMetrics::class;
    }
}
