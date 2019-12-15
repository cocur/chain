<?php

namespace Cocur\Chain\Link;

/**
 * IncludesTest.
 *
 * @author    Nicolas Reynis
 * @group     unit
 */
class IncludesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\Includes::includes()
     */
    public function includesFindElement(): void
    {
        /** @var Includes $mock */
        $mock        = $this->getMockForTrait(Includes::class);
        $mock->array = ['foobar', 'bar'];
        $this->assertTrue($mock->includes('bar'));
        $this->assertFalse($mock->includes('baz'));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\Includes::includes()
     */
    public function includesFindElementStrictly(): void
    {
        /** @var Includes $mock */
        $mock        = $this->getMockForTrait(Includes::class);
        $mock->array = ['42', '43'];
        $this->assertTrue($mock->includes('42', ['strict' => true]));
        $this->assertFalse($mock->includes(42, ['strict' => true]));
    }
}
