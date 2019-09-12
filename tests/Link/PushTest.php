<?php

namespace Cocur\Chain\Link;

/**
 * PushTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class PushTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Push::push()
     */
    public function pushPushesElementOntoTheEnd()
    {
        /** @var \Cocur\Chain\Link\Push $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Push');
        $mock->array = [0];
        $mock->push(1);

        $this->assertEquals([0, 1], $mock->array);
    }
}
