<?php

namespace Finteca\Ledger\Commands;

use Illuminate\Console\Command;

class LedgerCommand extends Command
{
    public $signature = 'ledger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
