<?php

namespace Cocur\Chain\Link;

/**
 * First.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait First
{
    /**
     * Returns the first element of the array.
     *
     * @return mixed first element of the array or `false` if the array is empty
     */
    public function first()
    {
        // To not change the internal array pointer we invoke reset() in a closure
        $reset = function ($array) {
            return reset($array);
        };

        return $reset($this->array);
    }
}
