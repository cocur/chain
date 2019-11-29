<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * IntersectTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
class IntersectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Intersect::intersect()
     */
    public function intersectIntersectsWithArray(): void
    {
        /** @var Intersect $mock */
        $mock        = $this->getMockForTrait(Intersect::class);
        $mock->array = [1, 2, 3];
        $mock->intersect([3, 4, 5]);

        $this->assertContains(3, $mock->array);
        $this->assertNotContains(1, $mock->array);
        $this->assertNotContains(2, $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Intersect::intersect()
     */
    public function intersectIntersectsWithChain(): void
    {
        /** @var Intersect $mock */
        $mock        = $this->getMockForTrait(Intersect::class);
        $mock->array = [1, 2, 3];
        $mock->intersect(Chain::create([3, 4, 5]));

        $this->assertContains(3, $mock->array);
        $this->assertNotContains(1, $mock->array);
        $this->assertNotContains(2, $mock->array);
    }
}
