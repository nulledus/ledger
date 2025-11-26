<?php

use Nulledus\NulledusLedger\NulledusLedger;

it('can greet with a name', function () {
    $ledger = new NulledusLedger;
    $greeting = $ledger->greet('John');

    expect($greeting)->toBe('Hello, John! Welcome to Nulledus Ledger.');
});

it('can greet without a name', function () {
    $ledger = new NulledusLedger;
    $greeting = $ledger->greet();

    expect($greeting)->toBe('Hello! Welcome to Nulledus Ledger.');
});

it('can add two numbers', function () {
    $ledger = new NulledusLedger;
    $result = $ledger->add(5, 3);

    expect($result)->toBe(8);
});

it('can add decimals', function () {
    $ledger = new NulledusLedger;
    $result = $ledger->add(2.5, 3.7);

    expect($result)->toBe(6.2);
});
