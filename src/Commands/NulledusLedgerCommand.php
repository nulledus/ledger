<?php

namespace Nulledus\NulledusLedger\Commands;

use Illuminate\Console\Command;

class NulledusLedgerCommand extends Command
{
    public $signature = 'nulledus-ledger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
