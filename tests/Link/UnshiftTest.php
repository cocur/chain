<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * UnshiftTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class UnshiftTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Unshift::unshift()
     */
    public function unshiftPrependsElement()
    {
        /** @var \Cocur\Chain\Link\Unshift $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Unshift');
        $mock->array = [1];
        $mock->unshift(0);

        $this->assertEquals([0, 1], $mock->array);
    }
}
