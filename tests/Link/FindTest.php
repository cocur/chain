<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * FindTest
 *
 * @package   Cocur\Chain\Link
 * @author    Christoph Rosse
 * @copyright 2017 Christoph Rosse
 * @group     unit
 */
class FindTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Find::find()
     */
    public function findFindsAnElementByACallback()
    {
        /** @var \Cocur\Chain\Link\Find $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Find');
        $mock->array = ['foo', 'bar', 'bar'];

        $result = $mock->find(function ($item) { return $item === 'bar'; });
        $this->assertEquals('bar', $result);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\Find::find()
     */
    public function findReturnsFalseIfElementCantBeFound()
    {
        /** @var \Cocur\Chain\Link\Find $mock */
        $mock = $this->getMockForTrait('Cocur\Chain\Link\Find');
        $mock->array = ['foo', 'bar', 'bar'];

        $result = $mock->find(function ($item) { return $item === 'IDONTEXIST'; });
        $this->assertFalse($result);
    }
}
