<?php

namespace Finteca\Ledger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Finteca\Ledger\Ledger
 */
class Ledger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Finteca\Ledger\Ledger::class;
    }
}
