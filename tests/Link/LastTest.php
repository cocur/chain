<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * LastTest
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class LastTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Last::last()
     */
    public function lastReturnsLastElement()
    {
        /** @var \Cocur\Chain\Link\Filter $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Last');
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(3, $mock->last());
    }
}
