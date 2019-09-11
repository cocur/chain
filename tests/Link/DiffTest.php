<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * DiffTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class DiffTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Diff::diff()
     */
    public function diffDiffsChainWithArray()
    {
        /** @var \Cocur\Chain\Link\Diff $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Diff');
        $mock->array = [0, 1, 2];
        $mock->diff([1, 2, 3]);

        $this->assertEquals([0], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Diff::diff()
     */
    public function diffDiffsChainWithChain()
    {
        /** @var \Cocur\Chain\Link\Diff $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Diff');
        $mock->array = [0, 1, 2];
        $mock->diff(Chain::create([1, 2, 3]));

        $this->assertEquals([0], $mock->array);
    }
}
