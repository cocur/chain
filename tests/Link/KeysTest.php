<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\ChainTest;

/**
 * KeysTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class KeysTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Keys::keys()
     */
    public function keysChangesArrayToKeys(): void
    {
        /** @var Keys $mock */
        $mock        = $this->getMockForTrait(Keys::class);
        $mock->array = ['foo' => 1, 'bar' => 2];
        $this->expectExceptionMessageRegExp(ChainTest::getFluentTypeErrorForMockedTrait($mock));
        $mock->keys();

        $this->assertEquals(['foo', 'bar'], $mock->array);
    }
}
