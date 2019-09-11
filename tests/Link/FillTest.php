<?php

namespace Cocur\Chain\Link;

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
    public function fillCreatesAFilledChain()
    {
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
