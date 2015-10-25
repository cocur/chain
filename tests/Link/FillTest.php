<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * FillTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class FillTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Fill::fill()
     */
    public function fillCreatesAFilledChain()
    {
        $mock = ChainMock::fill(0, 10);

        $this->assertInternalType('array', $mock->array);
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
