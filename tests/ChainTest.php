<?php

namespace Cocur\Chain;

use PHPUnit_Framework_TestCase;

/**
 * ChainTest
 *
 * @package   Cocur\Chain
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ChainTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Chain::__construct()
     */
    public function constructorCreatesChain()
    {
        $this->assertEquals([1, 2, 3], (new Chain([1, 2, 3]))->array);
    }

    /**
     * @test
     */
    public function chainHasTraits()
    {
        $c = new Chain();

        $this->assertTrue(method_exists($c, 'count'));
        $this->assertTrue(method_exists($c, 'diff'));
        $this->assertTrue(method_exists($c, 'fill'));
        $this->assertTrue(method_exists($c, 'filter'));
        $this->assertTrue(method_exists($c, 'intersect'));
        $this->assertTrue(method_exists($c, 'intersectAssoc'));
        $this->assertTrue(method_exists($c, 'intersectKey'));
        $this->assertTrue(method_exists($c, 'map'));
        $this->assertTrue(method_exists($c, 'merge'));
        $this->assertTrue(method_exists($c, 'pop'));
        $this->assertTrue(method_exists($c, 'push'));
        $this->assertTrue(method_exists($c, 'reduce'));
        $this->assertTrue(method_exists($c, 'shift'));
        $this->assertTrue(method_exists($c, 'sum'));
        $this->assertTrue(method_exists($c, 'unshift'));
    }
}
