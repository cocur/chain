<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * CountTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class CountTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Count::count()
     */
    public function countReturnsNumberOfElements()
    {
        /** @var \Cocur\Chain\Link\Count $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Count');
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(4, $mock->count());
    }
}
