<?php

namespace Cocur\Chain\Link;

/**
 * ShuffleTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ShuffleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Shuffle::shuffle()
     */
    public function shuffleRandomizesChain(): void
    {
        /** @var Shuffle $mock */
        $mock        = $this->getMockForTrait(Shuffle::class);
        $mock->array = [0, 1, 3, 4, 5, 6, 7, 8, 9];
        $mock->shuffle();

        $this->assertNotEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $mock->array);
    }
}
