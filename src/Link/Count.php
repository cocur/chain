<?php

namespace Cocur\Chain\Link;

/**
 * Count.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Count
{
    /**
     * Counts all elements in the array.
     *
     * @return int returns the number of elements in the array
     */
    public function count(): int
    {
        return count($this->array);
    }
}
