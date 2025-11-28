<?php

use Finteca\Ledger\Ledger;

it('can show it is alive and working', function () {
    $ledger = new Ledger;
    $test = $ledger->test();

    expect($test)->toBe('hello');
});
