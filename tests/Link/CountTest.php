<?php

namespace Cocur\Chain\Link;

/**
 * CountTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class CountTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Count::count()
     */
    public function countReturnsNumberOfElements(): void
    {
        /** @var Count $mock */
        $mock        = $this->getMockForTrait(Count::class);
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(4, $mock->count());
    }
}
