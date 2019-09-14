<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\ChainTest;

/**
 * ReverseTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ReverseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Reverse::reverse()
     */
    public function reverseReversesTheChain(): void
    {
        /** @var Reverse $mock */
        $mock        = $this->getMockForTrait(Reverse::class);
        $mock->array = [0, 1];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->reverse();

        $this->assertEquals([1, 0], $mock->array);
    }
}
