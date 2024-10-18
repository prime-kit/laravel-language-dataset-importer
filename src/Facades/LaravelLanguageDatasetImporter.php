<?php

namespace PrimeKit\LaravelLanguageDatasetImporter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PrimeKit\LaravelLanguageDatasetImporter\LaravelLanguageDatasetImporter
 */
class LaravelLanguageDatasetImporter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PrimeKit\LaravelLanguageDatasetImporter\LaravelLanguageDatasetImporter::class;
    }
}
