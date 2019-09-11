<?php

namespace Cocur\Chain\Link;

/**
 * UnshiftTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class UnshiftTest extends \PHPUnit\Framework\TestCase
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
