<?php

namespace Cocur\Chain\Link;

/**
 * PadTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class PadTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Pad::pad()
     */
    public function padExtendsArray(): void
    {
        /** @var Pad $mock */
        $mock        = $this->getMockForTrait(Pad::class);
        $mock->array = [0];
        $mock->pad(3, 5);

        $this->assertEquals([0, 5, 5], $mock->array);
    }
}
