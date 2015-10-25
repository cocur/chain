<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;
use PHPUnit_Framework_TestCase;

/**
 * IntersectAssocTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class IntersectAssocTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\IntersectAssoc::intersectAssoc()
     */
    public function intersectAssocIntersectsWithArray()
    {
        /** @var \Cocur\Chain\Link\IntersectAssoc $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\IntersectAssoc');
        $mock->array = [1, 2, 3];
        $mock->intersectAssoc([3, 2, 1]);

        $this->assertContains(2, $mock->array);
        $this->assertNotContains(1, $mock->array);
        $this->assertNotContains(3, $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\IntersectAssoc::intersectAssoc()
     */
    public function intersectAssocIntersectsWithChain()
    {
        /** @var \Cocur\Chain\Link\IntersectAssoc $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\IntersectAssoc');
        $mock->array = [1, 2, 3];
        $mock->intersectAssoc(Chain::create([3, 2, 1]));

        $this->assertContains(2, $mock->array);
        $this->assertNotContains(1, $mock->array);
        $this->assertNotContains(3, $mock->array);
    }
}
