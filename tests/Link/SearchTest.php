<?php

namespace Cocur\Chain\Link;

/**
 * SearchTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class SearchTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Search::search()
     */
    public function searchSearchesArrayForValue()
    {
        /** @var \Cocur\Chain\Link\Search $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Search');
        $mock->array = ['foo', 'bar'];

        $this->assertEquals(1, $mock->search('bar'));
    }
}
