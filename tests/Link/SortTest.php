<?php

namespace Cocur\Chain\Link;

/**
 * SortTest.
 *
 * @author    Christoph Rosse
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @group     unit
 */
class SortTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithDefaultSorting(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $this->assertSame(['apple', 'banana', 'lemon', 'orange'], $mock->sort()->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithAlternativeSortingAlgorithm(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['111', '21', '112', '22'];

        $this->assertSame(['21', '22', '111', '112'], $mock->sort(SORT_NUMERIC)->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithDefaultSortingAndAssocOption(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $this->assertSame(
            [3 => 'apple', 2 => 'banana', 0 => 'lemon', 1 => 'orange'],
            $mock->sort(null, ['assoc' => true])->array
        );
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithDefaultSortingAndReverseOption(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $this->assertSame(
            ['orange', 'lemon', 'banana', 'apple'],
            $mock->sort(null, ['reverse' => true])->array
        );
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithDefaultSortingAndAssocAndReverseOption(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $this->assertSame(
            [1 => 'orange', 0 => 'lemon', 2 => 'banana', 3 => 'apple'],
            $mock->sort(null, ['assoc' => true, 'reverse' => true])->array
        );
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithCallback()
     */
    public function sortWithFunction(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['kiwi', 'banana', 'apple'];

        // sort by strlen
        $this->assertSame(['kiwi', 'apple', 'banana'], $mock->sort(function ($a, $b): int {
            $a = strlen($a);
            $b = strlen($b);

            return $a === $b ? 0 : ($a < $b ? -1 : 1);
        })->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithCallback()
     */
    public function sortWithFunctionAndAssocOption(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['kiwi', 'banana', 'apple'];

        // sort by strlen
        $this->assertSame([0 => 'kiwi', 2 => 'apple', 1 => 'banana'], $mock->sort(function ($a, $b): int {
            $a = strlen($a);
            $b = strlen($b);

            return $a === $b ? 0 : ($a < $b ? -1 : 1);
        }, ['assoc' => true])->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Sort::sort()
     * @covers \Cocur\Chain\Link\Sort::sortWithFlags()
     */
    public function sortWithNatCaseSort(): void
    {
        /** @var Sort $mock */
        $mock        = $this->getMockForTrait(Sort::class);
        $mock->array = ['IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png'];

        $result = $mock->sort(SORT_NATURAL | SORT_FLAG_CASE);
        $this->assertSame('IMG0.png', $result->array[0]);
        $this->assertSame('img1.png', $result->array[1]);
        $this->assertSame('img2.png', $result->array[2]);
        $this->assertSame('IMG3.png', $result->array[3]);
        $this->assertSame('img10.png', $result->array[4]);
        $this->assertSame('img12.png', $result->array[5]);
    }
}
