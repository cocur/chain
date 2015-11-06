<?php

namespace Cocur\Chain;

use PHPUnit_Framework_TestCase;

/**
 * ChainTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ChainTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Chain::create()
     */
    public function createCreatesChain()
    {
        $this->assertEquals([1, 2, 3], Chain::create([1, 2, 3])->array);
    }

    /**
     * @test
     */
    public function chainHasTraits()
    {
        $c = new Chain();

        $this->assertTrue(method_exists($c, 'changeKeyCase'));
        $this->assertTrue(method_exists($c, 'combine'));
        $this->assertTrue(method_exists($c, 'count'));
        $this->assertTrue(method_exists($c, 'diff'));
        $this->assertTrue(method_exists($c, 'fill'));
        $this->assertTrue(method_exists($c, 'filter'));
        $this->assertTrue(method_exists($c, 'flip'));
        $this->assertTrue(method_exists($c, 'intersect'));
        $this->assertTrue(method_exists($c, 'intersectAssoc'));
        $this->assertTrue(method_exists($c, 'intersectKey'));
        $this->assertTrue(method_exists($c, 'keys'));
        $this->assertTrue(method_exists($c, 'map'));
        $this->assertTrue(method_exists($c, 'merge'));
        $this->assertTrue(method_exists($c, 'pad'));
        $this->assertTrue(method_exists($c, 'pop'));
        $this->assertTrue(method_exists($c, 'product'));
        $this->assertTrue(method_exists($c, 'push'));
        $this->assertTrue(method_exists($c, 'rand'));
        $this->assertTrue(method_exists($c, 'reduce'));
        $this->assertTrue(method_exists($c, 'replace'));
        $this->assertTrue(method_exists($c, 'reverse'));
        $this->assertTrue(method_exists($c, 'search'));
        $this->assertTrue(method_exists($c, 'shift'));
        $this->assertTrue(method_exists($c, 'shuffle'));
        $this->assertTrue(method_exists($c, 'slice'));
        $this->assertTrue(method_exists($c, 'sort'));
        $this->assertTrue(method_exists($c, 'sortKeys'));
        $this->assertTrue(method_exists($c, 'sum'));
        $this->assertTrue(method_exists($c, 'unique'));
        $this->assertTrue(method_exists($c, 'unshift'));
    }

    /**
     * @test
     * @covers Cocur\Chain\AbstractChain::getIterator()
     */
    public function chainIsTraversable()
    {
        $data = ['a', 'b'];
        $c    = Chain::create($data);

        $this->assertInstanceOf('\Traversable', $c);

        foreach ($c as $key => $value) {
            $this->assertEquals($data[$key], $value);
        }
    }

    /**
     * @test
     * @covers Cocur\Chain\AbstractChain::offsetExists()
     * @covers Cocur\Chain\AbstractChain::offsetGet()
     * @covers Cocur\Chain\AbstractChain::offsetSet()
     * @covers Cocur\Chain\AbstractChain::offsetUnset()
     */
    public function chainAllowsArrayAccess()
    {
        $c = Chain::create();

        $this->assertFalse(isset($c[0]));
        $c[0] = 'foo';
        $this->assertTrue(isset($c[0]));
        $this->assertEquals('foo', $c[0]);
        unset($c[0]);
        $this->assertFalse(isset($c[0]));
    }

    /**
     * @test
     * @covers Cocur\Chain\Chain::count()
     */
    public function chainIsCountable()
    {
        $c = Chain::create([0, 1, 2]);

        $this->assertInstanceOf('\Countable', $c);
        $this->assertEquals(3, count($c));
    }

    /**
     * @test
     * @covers Cocur\Chain\AbstractChain::first()
     */
    public function firstReturnsFirstElement()
    {
        $c = Chain::create([0, 1, 2]);

        $this->assertEquals(0, $c->first());
    }

    /**
     * @test
     * @covers Cocur\Chain\AbstractChain::last()
     */
    public function lastReturnsLastElement()
    {
        $c = Chain::create([0, 1, 2]);

        $this->assertEquals(2, $c->last());
    }
}
