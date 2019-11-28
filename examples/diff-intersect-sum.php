<?php

use Cocur\Chain\Chain;

require_once __DIR__.'/../vendor/autoload.php';

echo array_sum(array_intersect(
    array_diff([1, 2, 3, 4, 5], [0, 1, 9]),
    array_filter([2, 3, 4], function ($v) {
        return !($v & 1);
    })
));

echo "\n";

echo (new Chain([1, 2, 3, 4, 5]))
    ->diff([0, 1, 9])
    ->intersect((new Chain([2, 3, 4]))->filter(function ($v) {
        return !($v & 1);
    }))
    ->sum();
