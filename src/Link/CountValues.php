<?php

namespace Cocur\Chain\Link;

/**
 * CountValues.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait CountValues
{
    /**
     * Counts all the values of the array.
     *
     * Returns an array using the values of the array as keys and their frequency as values.
     *
     * @return array an associative array of values from the array as keys and their count value
     */
    public function countValues(): array
    {
        return array_count_values($this->array);
    }
}
