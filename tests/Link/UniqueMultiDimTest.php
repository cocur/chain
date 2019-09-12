<?php

namespace Cocur\Chain\Link;

/**
 * UniqueMultiDimTest.
 *
 * @author    Paulo Félix
 * @group     unit
 */
class UniqueMultiDimTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @covers Cocur\Chain\Link\UniqueMultiDim::uniqueMultiDim()
     */
    public function uniqueMultiDimensionalRemoveDuplicatesByIndex()
    {
        /** @var \Cocur\Chain\Link\UniqueMultiDim $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\UniqueMultiDim');
        $mock->array = [
            ['id' => 1, 'name' => 'Anderson Howard'],
            ['id' => 2, 'name' => 'Tyler Dan'],
            ['id' => 2, 'name' => 'Son Romito']
        ];

        $mock->uniqueMultiDim('id');

        $this->assertEquals([
            ['id' => 1, 'name' => 'Anderson Howard'],
            ['id' => 2, 'name' => 'Tyler Dan'],
        ], $mock->array);
    }

    /**
     * @test
     * @covers Cocur\Chain\Link\UniqueMultiDim::uniqueMultiDim()
     */
    public function uniqueMultiDimensionalRemoveDuplicates()
    {
        /** @var \Cocur\Chain\Link\UniqueMultiDim $mock */
        $mock        = $this->getMockForTrait('Cocur\Chain\Link\UniqueMultiDim');
        $mock->array = [
            ['id' => 1, 'name' => 'Anderson Howard'],
            ['id' => 2, 'name' => 'Tyler Dan'],
            ['id' => 2, 'name' => 'Tyler Dan'],
            ['id' => 2, 'name' => 'Son Romito'],
            ['id' => 2, 'name' => 'Son Romito']
        ];
        
        $mock->uniqueMultiDim();

        $this->assertEquals([
            ['id' => 1, 'name' => 'Anderson Howard'],
            ['id' => 2, 'name' => 'Tyler Dan'],
            ['id' => 2, 'name' => 'Son Romito'],
        ], $mock->array);
    }
}
