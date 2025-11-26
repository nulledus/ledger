<?php

namespace Nulledus\NulledusLedger;

use Nulledus\NulledusLedger\Commands\NulledusLedgerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NulledusLedgerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nulledus-ledger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nulledus_ledger_table')
            ->hasCommand(NulledusLedgerCommand::class);
    }
}
