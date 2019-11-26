<?php

namespace Cocur\Chain\Link;

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
     * @return self
     */
    public function unique(int $sortFlags = SORT_STRING): self
    {
        $this->array = array_unique($this->array, $sortFlags);

        return $this;
    }
}
