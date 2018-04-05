<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Unique.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Unique
{
    /**
     * @param int $sortFlags
     *
     * @return Chain
     */
    public function unique($sortFlags = SORT_STRING)
    {
        $this->array = array_unique($this->array, $sortFlags);

        return $this;
    }
}
