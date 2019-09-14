<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\ChainTest;

/**
 * UnshiftTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class UnshiftTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Unshift::unshift()
     */
    public function unshiftPrependsElement(): void
    {
        /** @var Unshift $mock */
        $mock        = $this->getMockForTrait(Unshift::class);
        $mock->array = [1];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->unshift(0);

        $this->assertEquals([0, 1], $mock->array);
    }
}
