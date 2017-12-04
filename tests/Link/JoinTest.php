<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * CountTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class JoinTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Join::join()
     */
    public function joinReturnsStringWithoutGlue()
    {
        /** @var \Cocur\Chain\Link\Join $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Join');
        $mock->array = ['a', 'b', 'c'];

        $this->assertEquals('abc', $mock->join());
    }
}
