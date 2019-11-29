<?php

namespace Cocur\Chain\Link;

/**
 * FindTest.
 *
 * @author    Christoph Rosse
 * @copyright 2017 Christoph Rosse
 * @group     unit
 */
class FindTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Find::find()
     */
    public function findFindsAnElementByACallback(): void
    {
        /** @var Find $mock */
        $mock        = $this->getMockForTrait(Find::class);
        $mock->array = ['foo', 'bar', 'bar'];

        $result = $mock->find(function ($item): bool {
            return 'bar' === $item;
        });
        $this->assertEquals('bar', $result);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Find::find()
     */
    public function findReturnsFalseIfElementCantBeFound(): void
    {
        /** @var Find $mock */
        $mock        = $this->getMockForTrait(Find::class);
        $mock->array = ['foo', 'bar', 'bar'];

        $result = $mock->find(function ($item): bool {
            return 'IDONTEXIST' === $item;
        });
        $this->assertFalse($result);
    }
}
