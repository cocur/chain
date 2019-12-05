<?php

namespace Cocur\Chain\Link;

/**
 * MapTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class MapTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Map::map()
     */
    public function mapAppliesMapToArray(): void
    {
        /** @var Map $mock */
        $mock        = $this->getMockForTrait(Map::class);
        $mock->array = ['foobar', 'bar'];
        $mock->map(function ($v) {
            return str_replace('bar', 'foo', $v);
        });

        $this->assertEquals('foofoo', $mock->array[0]);
        $this->assertEquals('foo', $mock->array[1]);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Map::map()
     */
    public function mapCallbackReceivesAlsoArrayKeys(): void
    {
        /** @var Map $mock */
        $mock        = $this->getMockForTrait(Map::class);
        $mock->array = ['foo' => 'fizz', 'bar' => 'buzz'];
        $mock->map(function ($v, $k) {
            return 'foo' == $k ? str_replace('fizz', 'bang', $v) : $v;
        });

        $this->assertEquals(['foo' => 'bang', 'bar' => 'buzz'], $mock->array);
    }
}
