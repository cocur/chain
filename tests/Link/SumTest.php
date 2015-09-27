<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SumTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class SumTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Sum::sum()
     */
    public function sumReturnsSumOfArray()
    {
        /** @var \Cocur\Chain\Link\Sum $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Sum');
        $mock->array = [1, 2, 3];

        $this->assertEquals(6, $mock->sum());
    }
}
