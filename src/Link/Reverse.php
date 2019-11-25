<?php

namespace Cocur\Chain\Link;

/**
 * Reverse.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Reverse
{
    /**
     * @param bool $preserveKeys
     *
     * @return self
     */
    public function reverse(bool $preserveKeys = false): self
    {
        $this->array = array_reverse($this->array, $preserveKeys);

        return $this;
    }
}
