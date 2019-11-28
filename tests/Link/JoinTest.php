<?php

namespace Cocur\Chain\Link;

/**
 * CountTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class JoinTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Join::join()
     */
    public function joinReturnsStringWithoutGlue(): void
    {
        /** @var Join $mock */
        $mock        = $this->getMockForTrait(Join::class);
        $mock->array = ['a', 'b', 'c'];

        $this->assertEquals('abc', $mock->join());
    }
}
