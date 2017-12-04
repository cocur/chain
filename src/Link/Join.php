<?php

namespace Cocur\Chain\Link;

/**
 * Implode.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2017 Florian Eckerstorfer
 */
trait Join
{
    /**
     * Join array elements with a string
     *
     * @param string $glue
     *
     * @return string Returns a string containing a string representation of all the array elements in the same order,
     *                with the glue string between each element.
     */
    public function join($glue = '')
    {
        return implode($glue, $this->array);
    }
}
