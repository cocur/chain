<?php

namespace Cocur\Chain\Link;

/**
 * FirstTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group unit
 */
class FirstTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\First::first()
     */
    public function firstReturnsFirstElement(): void
    {
        /** @var First $mock */
        $mock        = $this->getMockForTrait(First::class);
        $mock->array = [0, 1, 2, 3];

        $this->assertEquals(0, $mock->first());
    }
}
