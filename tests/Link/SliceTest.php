<?php

namespace Cocur\Chain\Link;

/**
 * SliceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class SliceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Slice::slice()
     */
    public function sliceSlicesArray(): void
    {
        /** @var Slice $mock */
        $mock        = $this->getMockForTrait(Slice::class);
        $mock->array = [0, 1, 2, 3, 4, 5];
        $mock->slice(1, 3);

        $this->assertEquals([1, 2, 3], $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Slice::slice()
     */
    public function sliceCanChain(): void
    {
        /** @var Slice $mock */
        $mock        = $this->getMockForTrait(Slice::class);
        $mock->array = [0, 1, 2, 3, 4, 5];
        $result      = $mock->slice(1, 3)->array;
        $this->assertEquals([1, 2, 3], $result);
    }
}
