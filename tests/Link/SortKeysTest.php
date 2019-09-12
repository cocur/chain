<?php

namespace Cocur\Chain\Link;

/**
 * SortKeysTest.
 *
 * @author    Christoph Rosse
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @group     unit
 */
class SortKeysTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     * @covers Cocur\Chain\Link\SortKeys::sortKeysWithFlags()
     */
    public function sortKeysWithDefaultSorting()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['lemon' => 1, 'orange' => 2, 'banana' => 3, 'apple' => 4];

        $this->assertSame(['apple' => 4, 'banana' => 3, 'lemon' => 1, 'orange' => 2], $mock->sortKeys()->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     * @covers Cocur\Chain\Link\SortKeys::sortKeysWithFlags()
     */
    public function sortKeysWithAlternativeSortingAlgorithm()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['111' => 1, '21' => 2, '112' => 3, '22' => 4];

        $this->assertSame(['21' => 2, '22' => 4, '111' => 1, '112' => 3], $mock->sortKeys()->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     * @covers Cocur\Chain\Link\SortKeys::sortKeysWithFlags()
     */
    public function sortKeysWithDefaultSortingAndReverseOption()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['lemon' => 1, 'orange' => 2, 'banana' => 3, 'apple' => 4];

        $this->assertSame(
            ['orange' => 2, 'lemon' => 1, 'banana' => 3, 'apple' => 4],
            $mock->sortKeys(null, ['reverse' => true])->array
        );
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\SortKeys::sortKeys()
     */
    public function sortKeysWithFunction()
    {
        /** @var \Cocur\Chain\Link\SortKeys $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\SortKeys');
        $mock->array = ['kiwi' => 2, 'banana' => 3, 'apple' => 4];

        // sort by strlen
        $this->assertSame(['kiwi' => 2, 'apple' => 4, 'banana' => 3], $mock->sortKeys(function ($a, $b) {
            $a = strlen($a);
            $b = strlen($b);

            return $a === $b ? 0 : ($a < $b ? -1 : 1);
        })->array);
    }
}
