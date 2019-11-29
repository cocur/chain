<?php

namespace Cocur\Chain\Link;

/**
 * UniqueTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class UniqueTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Unique::unique()
     */
    public function uniqueRemovesDuplicates(): void
    {
        /** @var Unique $mock */
        $mock        = $this->getMockForTrait(Unique::class);
        $mock->array = [0, 1, 0, 0];
        $mock->unique();

        $this->assertEquals([0, 1], $mock->array);
    }
}
