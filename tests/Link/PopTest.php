<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * PopTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class PopTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Pop::pop()
     */
    public function popPopsElementOff()
    {
        /** @var \Cocur\Chain\Link\Pop $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Pop');
        $mock->array = [0, 1];

        $this->assertEquals(1, $mock->pop());
        $this->assertEquals([0], $mock->array);
    }
}
