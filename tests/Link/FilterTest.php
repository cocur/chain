<?php

namespace Cocur\Chain\Link;

/**
 * FilterTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class FilterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Filter::filter()
     */
    public function filterFiltersArray(): void
    {
        /** @var Filter $mock */
        $mock        = $this->getMockForTrait(Filter::class);
        $mock->array = [0, 1, 2, 3];
        $mock->filter(function ($v): bool {
            return $v & 1;
        });

        $this->assertCount(2, $mock->array);
        $this->assertContains(1, $mock->array);
        $this->assertContains(3, $mock->array);
        $this->assertNotContains(0, $mock->array);
        $this->assertNotContains(2, $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Filter::filter()
     */
    public function filterFiltersArrayByKey(): void
    {
        /** @var Filter $mock */
        $mock        = $this->getMockForTrait(Filter::class);
        $mock->array = ['0' => 0, '1' => 1, '2' => 2, '3' => 3];
        $mock->filter(function ($v, $k): bool {
            return intval($k) & 1;
        });

        $this->assertCount(2, $mock->array);
        $this->assertContains(1, $mock->array);
        $this->assertContains(3, $mock->array);
        $this->assertNotContains(0, $mock->array);
        $this->assertNotContains(2, $mock->array);
    }
}
