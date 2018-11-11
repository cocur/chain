<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * FlipTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class FlipTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Flip::flip()
     */
    public function flipExchangesKeysAndValues()
    {
        /** @var \Cocur\Chain\Link\Flip $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Flip');
        $mock->array = ['foo', 'bar'];
        $mock->flip();

        $this->assertEquals(['foo' => 0, 'bar' => 1], $mock->array);
    }
}
