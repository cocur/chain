<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * SimpleMergeTest.
 *
 * @author    Andrey Tsarev
 * @copyright 2015-2018 Florian Eckerstorfer
 */
class SimpleMergeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\SimpleMerge::simpleMerge()
     */
    public function mergeMergesArray(): void
    {
        /** @var SimpleMerge $mock */
        $mock        = $this->getMockForTrait(SimpleMerge::class);
        $mock->array = [0, 1, 2];
        $mock->simpleMerge([3, 4]);

        $this->assertEquals([0, 1, 2, 3, 4], $mock->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\SimpleMerge::simpleMerge()
     */
    public function mergeMergesChain(): void
    {
        /** @var SimpleMerge $mock */
        $mock        = $this->getMockForTrait(SimpleMerge::class);
        $mock->array = [0, 1, 2];
        $mock->simpleMerge(Chain::create([3, 4]));

        $this->assertEquals([0, 1, 2, 3, 4], $mock->array);
    }

}
