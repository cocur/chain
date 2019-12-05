<?php

namespace Cocur\Chain\Link;

/**
 * CountTest.
 *
 * @author    Christoph Rosse
 * @group     unit
 */
class ChangeKeyCaseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\ChangeKeyCase::changeKeyCase()
     */
    public function changeKeyCaseDefaultsToLower(): void
    {
        /** @var ChangeKeyCase $mock */
        $mock        = $this->getMockForTrait(ChangeKeyCase::class);
        $mock->array = ['FoO' => 1, 'BAR' => 2];

        $this->assertEquals(['foo' => 1, 'bar' => 2], $mock->changeKeyCase()->array);
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\ChangeKeyCase::changeKeyCase()
     */
    public function changeKeyCaseUsesGivenCase(): void
    {
        /** @var ChangeKeyCase $mock */
        $mock        = $this->getMockForTrait(ChangeKeyCase::class);
        $mock->array = ['FoO' => 1, 'bar' => 2];

        $this->assertEquals(['FOO' => 1, 'BAR' => 2], $mock->changeKeyCase(CASE_UPPER)->array);
    }
}
