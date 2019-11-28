<?php

namespace Cocur\Chain\Link;

/**
 * LastTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class LastTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Last::last()
     */
    public function lastReturnsLastElement(): void
    {
        /** @var Last $mock */
        $mock        = $this->getMockForTrait(Last::class);
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(3, $mock->last());
    }
}
