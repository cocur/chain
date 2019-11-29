<?php

namespace Cocur\Chain\Link;

/**
 * Last.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Last
{
    /**
     * Returns the last element of the array.
     *
     * @return mixed Last element of the array or `false` if the array is empty
     */
    public function last()
    {
        // To not change the internal array pointer we invoke end() in a closure
        $end = function ($array) {
            return end($array);
        };

        return $end($this->array);
    }
}
