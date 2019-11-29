<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * CombineTest.
 *
 * @author    Christoph Rosse
 * @group     unit
 */
class CombineTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Combine::combine()
     */
    public function combineValuesAndKeysWithChainTest(): void
    {
        /** @var Combine $mock */
        $mock = $this->getMockForTrait(Combine::class);

        $keys   = Chain::create(['foo', 'bar']);
        $values = Chain::create([42, 43]);

        $this->assertEquals(['foo' => 42, 'bar' => 43], $mock->combine($keys, $values)->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Combine::combine()
     */
    public function combineValuesAndKeysWithArraysTest(): void
    {
        /** @var Combine $mock */
        $mock = $this->getMockForTrait(Combine::class);

        $keys   = ['foo', 'bar'];
        $values = [42, 43];

        $this->assertEquals(['foo' => 42, 'bar' => 43], $mock->combine($keys, $values)->array);
    }
}
