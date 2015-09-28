<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ShuffleTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class ShuffleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Shuffle::shuffle()
     */
    public function shuffleRandomizesChain()
    {
        /** @var \Cocur\Chain\Link\Shuffle $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Shuffle');
        $mock->array = [0, 1, 3, 4, 5, 6, 7, 8, 9];
        $mock->shuffle();

        $this->assertNotEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $mock->array);
    }
}
