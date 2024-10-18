<?php

namespace PrimeKit\LaravelLanguageDatasetImporter;

use PrimeKit\LaravelLanguageDatasetImporter\Console\Commands\ImportLanguageDatasetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelLanguageDatasetImporterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-language-dataset-importer')
            ->runsMigrations()
            ->hasMigration('2024_01_17_130919_create_languages_table')
            ->hasCommand(ImportLanguageDatasetCommand::class);
    }
}
