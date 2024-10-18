<?php

namespace PrimeKit\LaravelLanguageDatasetImporter\Commands;

use Illuminate\Console\Command;

class LaravelLanguageDatasetImporterCommand extends Command
{
    public $signature = 'laravel-language-dataset-importer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
