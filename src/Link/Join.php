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
     * Join array elements with a string.
     *
     * @param string $glue
     *
     * @return string returns a string containing a string representation of all the array elements in the same order,
     *                with the glue string between each element
     */
    public function join(string $glue = ''): string
    {
        return implode($glue, $this->array);
    }
}
