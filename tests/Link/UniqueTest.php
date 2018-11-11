<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * UniqueTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class UniqueTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Unique::unique()
     */
    public function uniqueRemovesDuplicates()
    {
        /** @var \Cocur\Chain\Link\Unique $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Unique');
        $mock->array = [0, 1, 0, 0];
        $mock->unique();

        $this->assertEquals([0, 1], $mock->array);
    }
}
