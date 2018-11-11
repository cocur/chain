<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * FirstTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group unit
 */
class FirstTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\First::first()
     */
    public function firstReturnsFirstElement()
    {
        /** @var \Cocur\Chain\Link\Filter $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\First');
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(0, $mock->first());
    }
}
