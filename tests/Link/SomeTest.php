<?php

namespace Cocur\Chain\Link;

/**
 * SomeTest.
 *
 * @author    Nicolas Reynis
 * @group     unit
 */
class SomeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Some::some()
     */
    public function someReturnTrueWhenConditionPass(): void
    {
        /** @var Some $mock */
        $mock        = $this->getMockForTrait(Some::class);
        $mock->array = [1, 2, 3, 4];

        $this->assertTrue($mock->some(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Some::some()
     */
    public function someReturnFalseWhenConditionFail(): void
    {
        /** @var Some $mock */
        $mock        = $this->getMockForTrait(Some::class);
        $mock->array = [-1, -2, -3, -4];

        $this->assertFalse($mock->some(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Some::some()
     */
    public function someReturnTrueWhenConditionFailOnSomeElements(): void
    {
        /** @var Some $mock */
        $mock        = $this->getMockForTrait(Some::class);
        $mock->array = [1, 2, -3, 4];

        $this->assertTrue($mock->some(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Some::some()
     */
    public function someReturnFalseWithEmptyChain(): void
    {
        /** @var Some $mock */
        $mock        = $this->getMockForTrait(Some::class);
        $mock->array = [];

        $this->assertFalse($mock->some(function ($v) {
            return true;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Some::some()
     */
    public function someCallbackReceivesAlsoArrayKeys(): void
    {
        /** @var Some $mock */
        $mock        = $this->getMockForTrait(Some::class);
        $mock->array = ['foo' => 'fizz', 'bar' => 'buzz'];

        $this->assertTrue($mock->some(function ($v, $k) {
            return 'foo' === $k || 'bar' === $k;
        }));
    }
}
