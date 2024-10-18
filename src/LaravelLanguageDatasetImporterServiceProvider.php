<?php

namespace PrimeKit\LaravelLanguageDatasetImporter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PrimeKit\LaravelLanguageDatasetImporter\Commands\LaravelLanguageDatasetImporterCommand;

class LaravelLanguageDatasetImporterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-language-dataset-importer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_language_dataset_importer_table')
            ->hasCommand(LaravelLanguageDatasetImporterCommand::class);
    }
}
