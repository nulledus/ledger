<?php

use Finteca\Ledger\Ledger;

it('can greet with a name', function () {
    $ledger = new Ledger;
    $greeting = $ledger->greet('John');

    expect($greeting)->toBe('Hello, John! Welcome!!!');
});

it('can greet without a name', function () {
    $ledger = new Ledger;
    $greeting = $ledger->greet();

    expect($greeting)->toBe('Hello! Welcome to Ledger.');
});

it('can add two numbers', function () {
    $ledger = new Ledger;
    $result = $ledger->add(5, 3);

    expect($result)->toBe(8);
});

it('can add decimals', function () {
    $ledger = new Ledger;
    $result = $ledger->add(2.5, 3.7);

    expect($result)->toBe(6.2);
});
