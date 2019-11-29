<?php

use Cocur\Chain\Chain;

require_once __DIR__.'/../vendor/autoload.php';

$arr = array_filter(
    array_map(
        function ($v) {
            return rand(0, $v);
        },
        array_fill(0, 10, 20)
    ),
    function ($v) {
        return $v & 1;
    }
);

print_r($arr);

$chain = Chain::fill(0, 10, 20)
            ->map(function ($v) {
                return rand(0, $v);
            })
            ->filter(function ($v) {
                return $v & 1;
            });
print_r($chain->array);
