<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * MapTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class MapTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Map::map()
     */
    public function mapAppliesMapToArray()
    {
        /** @var \Cocur\Chain\Link\Map $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Map');
        $mock->array = ['foobar', 'bar'];
        $mock->map(function ($v) { return str_replace('bar', 'foo', $v); });

        $this->assertEquals('foofoo', $mock->array[0]);
        $this->assertEquals('foo', $mock->array[1]);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Map::map()
     */
    public function mapCallbackReceivesAlsoArrayKeys()
    {
        /** @var \Cocur\Chain\Link\Map $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Map');
        $mock->array = ['foo' => 'fizz', 'bar' => 'buzz'];
        $mock->map(function ($v, $k) {
            return $k == 'foo' ? str_replace('fizz', 'bang', $v) : $v;
        });

        $this->assertEquals(['foo' => 'bang', 'bar' => 'buzz'], $mock->array);
    }
}
