<?php

namespace PrimeKit\LaravelLanguageDatasetImporter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use PrimeKit\LaravelLanguageDatasetImporter\LaravelLanguageDatasetImporterServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PrimeKit\\LaravelLanguageDatasetImporter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelLanguageDatasetImporterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-language-dataset-importer_table.php.stub';
        $migration->up();
        */
    }
}
