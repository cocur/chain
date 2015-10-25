<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ShiftTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ShiftTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Shift::shift()
     */
    public function shiftShiftsElementOff()
    {
        /** @var \Cocur\Chain\Link\Shift $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Shift');
        $mock->array = [0, 1];

        $this->assertEquals(0, $mock->shift());
        $this->assertEquals([1], $mock->array);
    }
}
