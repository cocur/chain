<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Unique.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Unique
{
    /**
     * @param int $sortFlags
     *
     * @return Chain
     */
    public function unique(int $sortFlags = SORT_STRING): Chain
    {
        $this->array = array_unique($this->array, $sortFlags);

        return $this;
    }
}
