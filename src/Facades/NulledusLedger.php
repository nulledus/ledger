<?php

namespace Nulledus\NulledusLedger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nulledus\NulledusLedger\NulledusLedger
 */
class NulledusLedger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nulledus\NulledusLedger\NulledusLedger::class;
    }
}
