<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ReverseTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ReverseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Reverse::reverse()
     */
    public function reverseReversesTheChain()
    {
        /** @var \Cocur\Chain\Link\Reverse $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Reverse');
        $mock->array = [0, 1];
        $mock->reverse();

        $this->assertEquals([1, 0], $mock->array);
    }
}
