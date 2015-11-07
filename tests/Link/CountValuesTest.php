<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * CountValuesTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class CountValuesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\CountValues::countValues()
     */
    public function countValuesReturnsValueCounts()
    {
        /** @var \Cocur\Chain\Link\CountValues $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\CountValues');
        $mock->array = ['lemon', 'orange', 'lemon', 'apple', 'lemon'];

        $this->assertSame(['lemon' => 3, 'orange' => 1, 'apple' => 1], $mock->countValues());
    }
}
