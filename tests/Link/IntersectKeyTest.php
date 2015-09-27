<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;
use PHPUnit_Framework_TestCase;

/**
 * IntersectKeyTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class IntersectKeyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\IntersectKey::intersectKey()
     */
    public function intersectKeyIntersectsWithArray()
    {
        /** @var \Cocur\Chain\Link\IntersectKey $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\IntersectKey');
        $mock->array = ['a' => 1, 'b' => 2, 'c' => 3];
        $mock->intersectKey(['a' => 3, 'b' => 4, 'd' => 5]);

        $this->assertEquals(['a' => 1, 'b' => 2], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\IntersectKey::intersectKey()
     */
    public function intersectKeyIntersectsWithChain()
    {
        /** @var \Cocur\Chain\Link\IntersectKey $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\IntersectKey');
        $mock->array = ['a' => 1, 'b' => 2, 'c' => 3];
        $mock->intersectKey(new Chain(['a' => 3, 'b' => 4, 'd' => 5]));

        $this->assertEquals(['a' => 1, 'b' => 2], $mock->array);
    }
}
