<?php

namespace Cocur\Chain\Link;

/**
 * ShiftTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ShiftTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Shift::shift()
     */
    public function shiftShiftsElementOff(): void
    {
        /** @var Shift $mock */
        $mock        = $this->getMockForTrait(Shift::class);
        $mock->array = [0, 1];

        $this->assertEquals(0, $mock->shift());
        $this->assertEquals([1], $mock->array);
    }
}
