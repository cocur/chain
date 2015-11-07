<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SpliceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class SpliceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArray()
    {
        /** @var \Cocur\Chain\Link\Splice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Splice');
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(2);
        $this->assertSame(['lemon', 'orange'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithNegativeLength()
    {
        /** @var \Cocur\Chain\Link\Splice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Splice');
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(1, -1);
        $this->assertSame(['lemon', 'apple'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithReplacement()
    {
        /** @var \Cocur\Chain\Link\Splice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Splice');
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(1, 4, 'kiwi');
        $this->assertSame(['lemon', 'kiwi'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithArrayReplacement()
    {
        /** @var \Cocur\Chain\Link\Splice $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Splice');
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(-1, 1, ['kiwi', 'pineapple']);
        $this->assertSame(['lemon', 'orange', 'banana', 'kiwi', 'pineapple'], $mock->array);
    }
}
