<?php

namespace Cocur\Chain\Link;

/**
 * RandTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class RandTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Rand::rand()
     */
    public function randSelectsRandomElement()
    {
        /** @var \Cocur\Chain\Link\Rand $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Rand');
        $mock->array = [0, 1, 2];

        $rand = $mock->rand();
        $this->assertTrue($rand === 0 || $rand === 1 || $rand === 2);
    }
}
