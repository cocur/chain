<?php

namespace Cocur\Chain\Link;

/**
 * KeyExistsTest.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 * @group     unit
 */
class KeyExistsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers \Cocur\Chain\Link\KeyExists::keyExists()
     */
    public function keyExistsReturnsTrueIfKeyExists(): void
    {
        /** @var KeyExists $mock */
        $mock        = $this->getMockForTrait(KeyExists::class);
        $mock->array = ['foo' => 1, 'bar' => null];

        $this->assertTrue($mock->keyExists('foo'));
        $this->assertTrue($mock->keyExists('bar'));
    }

    /**
     * @test
     * @covers \Cocur\Chain\Link\KeyExists::keyExists()
     */
    public function keyExistsReturnsFalseIfKeyDoesNotExist(): void
    {
        /** @var KeyExists $mock */
        $mock        = $this->getMockForTrait(KeyExists::class);
        $mock->array = [];

        $this->assertFalse($mock->keyExists('invalid'));
    }
}
