<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SortKeysTest
 *
 * @package   Cocur\Chain\Link
 * @author    Christoph Rosse
 * @group     unit
 */
class SortKeysTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     */
    public function sortKeysWithDefaultSorting()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['lemon' => 1, 'orange' => 2, 'banana' => 3, 'apple' => 4];

        $this->assertEquals(['apple' => 4, 'banana' => 3, 'lemon' => 1, 'orange' => 2], $mock->sortKeys()->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     */
    public function sortKeysWithAlternativeSortingAlgorithm()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['111' => 1, '21' => 2, '112' => 3, '22' => 4];

        $this->assertEquals(['21' => 2, '22' => 4, '111' => 1, '112' => 3], $mock->sortKeys()->array);
    }
}
