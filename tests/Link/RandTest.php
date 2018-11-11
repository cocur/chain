<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * RandTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class RandTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Rand::rand()
     */
    public function randSelectsRandomElement()
    {
        /** @var \Cocur\Chain\Link\Rand $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Rand');
        $mock->array = [0, 1, 2];

        $this->assertInternalType('int', $mock->rand());
    }
}
