<?php

namespace Cocur\Chain\Link;

/**
 * CountValuesTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class CountValuesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\CountValues::countValues()
     */
    public function countValuesReturnsValueCounts(): void
    {
        /** @var CountValues $mock */
        $mock        = $this->getMockForTrait(CountValues::class);
        $mock->array = ['lemon', 'orange', 'lemon', 'apple', 'lemon'];

        $this->assertSame(['lemon' => 3, 'orange' => 1, 'apple' => 1], $mock->countValues());
    }
}
