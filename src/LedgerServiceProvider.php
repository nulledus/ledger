<?php

namespace Finteca\Ledger;

use Finteca\Ledger\Commands\LedgerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LedgerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ledger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_finteca_ledger_table')
            ->hasCommand(LedgerCommand::class);
    }
}
