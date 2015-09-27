<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * DiffTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class DiffTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Diff::diff()
     */
    public function diffDiffsChainWithAnotherArray()
    {
        /** @var \Cocur\Chain\Link\Diff $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Diff');
        $mock->array = [0, 1, 2];
        $mock->diff([1, 2, 3]);

        $this->assertEquals([0], $mock->array);
    }
}
