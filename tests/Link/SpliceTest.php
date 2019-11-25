<?php

namespace Cocur\Chain\Link;

/**
 * SpliceTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class SpliceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArray(): void
    {
        /** @var Splice $mock */
        $mock        = $this->getMockForTrait(Splice::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(2);
        $this->assertSame(['lemon', 'orange'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithNegativeLength(): void
    {
        /** @var Splice $mock */
        $mock        = $this->getMockForTrait(Splice::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(1, -1);
        $this->assertSame(['lemon', 'apple'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithReplacement(): void
    {
        /** @var Splice $mock */
        $mock        = $this->getMockForTrait(Splice::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(1, 4, 'kiwi');
        $this->assertSame(['lemon', 'kiwi'], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Splice::splice()
     */
    public function spliceRemovesAPortionOfTheArrayWithArrayReplacement(): void
    {
        /** @var Splice $mock */
        $mock        = $this->getMockForTrait(Splice::class);
        $mock->array = ['lemon', 'orange', 'banana', 'apple'];

        $mock->splice(-1, 1, ['kiwi', 'pineapple']);
        $this->assertSame(['lemon', 'orange', 'banana', 'kiwi', 'pineapple'], $mock->array);
    }
}
