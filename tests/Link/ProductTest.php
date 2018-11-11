<?php

namespace Cocur\Chain\Link;

use PHPUnit_Framework_TestCase;

/**
 * ProductTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ProductTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\Product::product()
     */
    public function productMultipliesElements()
    {
        /** @var \Cocur\Chain\Link\Product $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\Product');
        $mock->array = [2, 3];

        $this->assertEquals(6, $mock->product());
    }
}
