<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;
use PHPUnit_Framework_TestCase;

/**
 * CombineTest.
 *
 * @author    Christoph Rosse
 * @group     unit
 */
class CombineTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Combine::combine()
     */
    public function combineValuesAndKeysWithChainTest()
    {
        /** @var \Cocur\Chain\Link\Combine $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Combine');

        $keys   = Chain::create(['foo', 'bar']);
        $values = Chain::create([42, 43]);

        $this->assertEquals(['foo' => 42, 'bar' => 43], $mock->combine($keys, $values)->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Combine::combine()
     */
    public function combineValuesAndKeysWithArraysTest()
    {
        /** @var \Cocur\Chain\Link\Combine $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Combine');

        $keys   = ['foo', 'bar'];
        $values = [42, 43];

        $this->assertEquals(['foo' => 42, 'bar' => 43], $mock->combine($keys, $values)->array);
    }
}
