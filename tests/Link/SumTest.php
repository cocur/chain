<?php

namespace Cocur\Chain\Link;

/**
 * SumTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class SumTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Sum::sum()
     */
    public function sumReturnsSumOfArray(): void
    {
        /** @var Sum $mock */
        $mock        = $this->getMockForTrait(Sum::class);
        $mock->array = [1, 2, 3];

        $this->assertEquals(6, $mock->sum());
    }
}
