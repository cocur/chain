<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * FillTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class FillTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Fill::fill()
     */
    public function fillCreatesAFilledChain(): void
    {
        $fluentTypeErrorMessage = sprintf('Return value of %1$s::fill() must be an instance of %2$s, instance of %1$s returned',
            ChainMock::class, Chain::class);
        $this->expectExceptionMessage($fluentTypeErrorMessage);
        $mock = ChainMock::fill(0, 10);

        $this->assertIsArray($mock->array);
        $this->assertCount(10, $mock->array);
    }
}

class ChainMock
{
    use Fill;

    public $array;

    public function __construct($arr)
    {
        $this->array = $arr;
    }
}
