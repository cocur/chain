<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SortTest.
 *
 * @author    Christoph Rosse
 * @group     unit
 */
class SortTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Sort::sort()
     */
    public function sortWithDefaultSorting()
    {
        /** @var \Cocur\Chain\Link\Sort $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Sort');
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $this->assertEquals(['apple', 'banana', 'lemon', 'orange'], $mock->sort()->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Sort::sort()
     */
    public function sortWithAlternativeSortingAlgorithm()
    {
        /** @var \Cocur\Chain\Link\Sort $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Sort');
        $mock->array = ['111', '21', '112', '22'];

        $this->assertEquals(['21', '22', '111', '112'], $mock->sort(SORT_NUMERIC)->array);
    }
}
