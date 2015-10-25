<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * FilterTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class FilterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Filter::filter()
     */
    public function filterFiltersArray()
    {
        /** @var \Cocur\Chain\Link\Filter $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Filter');
        $mock->array = [0, 1, 2, 3];
        $mock->filter(function ($v) { return $v & 1; });

        $this->assertCount(2, $mock->array);
        $this->assertContains(1, $mock->array);
        $this->assertContains(3, $mock->array);
        $this->assertNotContains(0, $mock->array);
        $this->assertNotContains(2, $mock->array);
    }
}
