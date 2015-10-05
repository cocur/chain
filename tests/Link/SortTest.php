<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SortTest
 *
 * @package   Cocur\Chain\Link
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

        $this->assertSame(['apple', 'banana', 'lemon', 'orange'], $mock->sort()->array);
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

        $this->assertSame(['21', '22', '111', '112'], $mock->sort(SORT_NUMERIC)->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Sort::sort()
     */
    public function sortWithFunction()
    {
        /** @var \Cocur\Chain\Link\Sort $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Sort');
        $mock->array = ['kiwi', 'banana', 'apple'];

        // sort by strlen
        $this->assertSame(['kiwi', 'apple', 'banana'], $mock->sort(function ($a, $b) {
            $a = strlen($a);
            $b = strlen($b);

            return $a === $b ? 0 : ($a < $b ? -1 : 1);
        })->array);
    }
}
