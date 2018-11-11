<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SliceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class SliceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Slice::slice()
     */
    public function sliceSlicesArray()
    {
        /** @var \Cocur\Chain\Link\Slice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Slice');
        $mock->array = [0, 1, 2, 3, 4, 5];
        $mock->slice(1, 3);

        $this->assertEquals([1, 2, 3], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Slice::slice()
     */
    public function sliceCanChain()
    {
        /** @var \Cocur\Chain\Link\Slice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Slice');
        $mock->array = [0, 1, 2, 3, 4, 5];
        $result      = $mock->slice(1, 3)->array;
        $this->assertEquals([1, 2, 3], $result);
    }
}
