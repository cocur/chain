<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\ChainTest;

/**
 * FlipTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class FlipTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Flip::flip()
     */
    public function flipExchangesKeysAndValues(): void
    {
        /** @var Flip $mock */
        $mock        = $this->getMockForTrait(Flip::class);
        $mock->array = ['foo', 'bar'];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->flip();

        $this->assertEquals(['foo' => 0, 'bar' => 1], $mock->array);
    }
}
