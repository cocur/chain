<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * MergeTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
class MergeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Merge::merge()
     */
    public function mergeMergesArray(): void
    {
        /** @var Merge $mock */
        $mock        = $this->getMockForTrait(Merge::class);
        $mock->array = [0, 1, 2];
        $mock->merge([3, 4]);

        $this->assertEquals([0, 1, 2, 3, 4], $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Merge::merge()
     */
    public function mergeMergesChain(): void
    {
        /** @var Merge $mock */
        $mock        = $this->getMockForTrait(Merge::class);
        $mock->array = [0, 1, 2];
        $mock->merge(Chain::create([3, 4]));

        $this->assertEquals([0, 1, 2, 3, 4], $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Merge::merge()
     */
    public function mergeMergesRecursiveArray(): void
    {
        /** @var Merge $mock */
        $mock        = $this->getMockForTrait(Merge::class);
        $mock->array = ['foo' => [0, 1], 'bar' => ['a', 'b']];
        $mock->merge(['foo' => [2, 3], 'bar' => ['c', 'd']], ['recursive' => true]);

        $this->assertEquals(['foo' => [0, 1, 2, 3], 'bar' => ['a', 'b', 'c', 'd']], $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Merge::merge()
     */
    public function mergeMergesRecursiveChain(): void
    {
        /** @var Merge $mock */
        $mock        = $this->getMockForTrait(Merge::class);
        $mock->array = ['foo' => [0, 1], 'bar' => ['a', 'b']];
        $mock->merge(Chain::create(['foo' => [2, 3], 'bar' => ['c', 'd']]), ['recursive' => true]);

        $this->assertEquals(['foo' => [0, 1, 2, 3], 'bar' => ['a', 'b', 'c', 'd']], $mock->array);
    }
}
