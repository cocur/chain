<?php

namespace Cocur\Chain\Link;

/**
 * ValuesTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class ValuesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Values::values()
     */
    public function valuesChangesArrayToValues(): void
    {
        /** @var Values $mock */
        $mock        = $this->getMockForTrait(Values::class);
        $mock->array = ['foo' => 1, 'bar' => 2];
        $mock->values();

        $this->assertEquals([1, 2], $mock->array);
    }
}
