<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\ChainTest;

/**
 * MapTest.
 *
 * @author    Nicolas Reynis
 * @group     unit
 */
class FlatMapTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\FlatMap::flatMap()
     */
    public function flatMapAppliesMapToArray(): void
    {
        /** @var FlatMap $mock */
        $mock        = $this->getMockForTrait(FlatMap::class);
        $mock->array = ['foobar', 'bar'];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->flatMap(function ($v) { return [str_replace('bar', 'foo', $v)]; });

        $this->assertEquals('foofoo', $mock->array[0]);
        $this->assertEquals('foo', $mock->array[1]);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\FlatMap::flatMap()
     */
    public function flatMapCallbackReceivesAlsoArrayKeys(): void
    {
        /** @var FlatMap $mock */
        $mock        = $this->getMockForTrait(FlatMap::class);
        $mock->array = ['foo' => 'fizz', 'bar' => 'buzz'];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->flatMap(function ($v, $k) {
            return $k == 'foo' ? [str_replace('fizz', 'bang', $v)] : [$v];
        });

        $this->assertEquals(['bang', 'buzz'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\FlatMap::flatMap()
     */
    public function flatMapCallbackCanReturnScalarOrArray(): void
    {
        /** @var FlatMap $mock */
        $mock        = $this->getMockForTrait(FlatMap::class);
        $mock->array = ['fizz', 'buzz'];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->flatMap(function ($v, $k) {
            return $k == 1 ? [$v] : $v;
        });

        $this->assertEquals(['fizz', 'buzz'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\FlatMap::flatMap()
     */
    public function flatMapAcceptsEmptyArray(): void
    {
        /** @var FlatMap $mock */
        $mock        = $this->getMockForTrait(FlatMap::class);
        $mock->array = [];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->flatMap(function ($v) {
            return $v;
        });

        $this->assertEquals([], $mock->array);
    }
}
