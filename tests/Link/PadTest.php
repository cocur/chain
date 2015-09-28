<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * PadTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class PadTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Pad::pad()
     */
    public function padExtendsArray()
    {
        /** @var \Cocur\Chain\Link\Pad $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Pad');
        $mock->array = [0];
        $mock->pad(3, 5);

        $this->assertEquals([0, 5, 5], $mock->array);
    }
}
