<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ReduceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ReduceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Reduce::reduce()
     */
    public function reduceReducesTheChain()
    {
        /** @var \Cocur\Chain\Link\Reduce $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Reduce');
        $mock->array = [1, 2, 3];

        $this->assertEquals(6, $mock->reduce(function ($s, $v) { return $s + $v; }));
    }
}
