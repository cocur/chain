<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ReplaceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ReplaceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Replace::replace()
     */
    public function replaceReplacesValuesInArray()
    {
        /** @var \Cocur\Chain\Link\Replace $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Replace');
        $mock->array = [0, 1, 2, 3, 4];
        $mock->replace([1 => 42, 3 => 69]);

        $this->assertEquals(0, $mock->array[0]);
        $this->assertEquals(42, $mock->array[1]);
        $this->assertEquals(69, $mock->array[3]);
    }
}
