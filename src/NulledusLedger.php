<?php

namespace Nulledus\NulledusLedger;

class NulledusLedger
{
    /**
     * Generate a greeting message
     */
    public function greet(?string $name = null): string
    {
        if ($name) {
            return "Hello, {$name}! Welcome to Nulledus Ledger.";
        }

        return 'Hello! Welcome to Nulledus Ledger.';
    }

    /**
     * Add two numbers together
     *
     * @param  int|float  $a
     * @param  int|float  $b
     * @return int|float
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
