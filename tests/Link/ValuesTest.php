<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ValuesTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ValuesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Values::values()
     */
    public function valuesChangesArrayToValues()
    {
        /** @var \Cocur\Chain\Link\Values $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Values');
        $mock->array = ['foo' => 1, 'bar' => 2];
        $mock->values();

        $this->assertEquals([1, 2], $mock->array);
    }
}
