<?php

namespace Cocur\Chain\Link;

/**
 * PopTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class PopTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Pop::pop()
     */
    public function popPopsElementOff(): void
    {
        /** @var Pop $mock */
        $mock        = $this->getMockForTrait(Pop::class);
        $mock->array = [0, 1];

        $this->assertEquals(1, $mock->pop());
        $this->assertEquals([0], $mock->array);
    }
}
