<?php

use Cocur\Chain\Chain;

require_once __DIR__.'/../vendor/autoload.php';

$chain = (new Chain([0, 1, 2]))
    ->merge([3, 4, 5])
    ->map('log');
print_r($chain->array);
