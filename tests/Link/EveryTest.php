<?php

namespace Cocur\Chain\Link;

/**
 * EveryTest.
 *
 * @author    Nicolas Reynis
 * @group     unit
 */
class EveryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Every::every()
     */
    public function everyReturnTrueWhenConditionPass(): void
    {
        /** @var Every $mock */
        $mock        = $this->getMockForTrait(Every::class);
        $mock->array = [1, 2, 3, 4];

        $this->assertTrue($mock->every(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Every::every()
     */
    public function everyReturnFalseWhenConditionFail(): void
    {
        /** @var Every $mock */
        $mock        = $this->getMockForTrait(Every::class);
        $mock->array = [-1, -2, -3, -4];

        $this->assertFalse($mock->every(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Every::every()
     */
    public function everyReturnFalseWhenConditionFailOnSomeElements(): void
    {
        /** @var Every $mock */
        $mock        = $this->getMockForTrait(Every::class);
        $mock->array = [1, 2, -3, 4];

        $this->assertFalse($mock->every(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Every::every()
     */
    public function everyReturnTrueWithEmptyChain(): void
    {
        /** @var Every $mock */
        $mock        = $this->getMockForTrait(Every::class);
        $mock->array = [];

        $this->assertTrue($mock->every(function ($v) {
            return $v > 0;
        }));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Every::every()
     */
    public function everyCallbackReceivesAlsoArrayKeys(): void
    {
        /** @var Every $mock */
        $mock        = $this->getMockForTrait(Every::class);
        $mock->array = ['foo' => 'fizz', 'bar' => 'buzz'];

        $this->assertTrue($mock->every(function ($v, $k) {
            return 'foo' === $k || 'bar' === $k;
        }));
    }
}
