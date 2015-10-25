<?php

namespace Cocur\Chain\Link;

/**
 * Count.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Count
{
    /**
     * @return int
     */
    public function count()
    {
        return count($this->array);
    }
}
