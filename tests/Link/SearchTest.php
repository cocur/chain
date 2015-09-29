<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * SearchTest
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class SearchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Search::search()
     */
    public function searchSearchesArrayForValue()
    {
        /** @var \Cocur\Chain\Link\Search $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Search');
        $mock->array = ['foo', 'bar'];

        $this->assertEquals(1, $mock->search('bar'));
    }
}
