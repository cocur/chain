<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * CountTest
 *
 * @package   Cocur\Chain\Link
 * @author    Christoph Rosse
 * @group     unit
 */
class ChangeKeyCaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\ChangeKeyCase::changeKeyCase()
     */
    public function changeKeyCaseDefaultsToLower()
    {
        /** @var \Cocur\Chain\Link\ChangeKeyCase $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\ChangeKeyCase');
        $mock->array = ['FoO' => 1, 'BAR' => 2];

        $this->assertEquals(['foo' => 1, 'bar' => 2], $mock->changeKeyCase()->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\ChangeKeyCase::changeKeyCase()
     */
    public function changeKeyCaseUsesGivenCase()
    {
        /** @var \Cocur\Chain\Link\ChangeKeyCase $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\ChangeKeyCase');
        $mock->array = ['FoO' => 1, 'bar' => 2];

        $this->assertEquals(['FOO' => 1, 'BAR' => 2], $mock->changeKeyCase(CASE_UPPER)->array);
    }
}
