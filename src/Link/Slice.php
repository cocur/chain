<?php

namespace Cocur\Chain\Link;

/**
 * Slice.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Slice
{
    /**
     * @param int      $offset
     * @param int|null $length
     * @param bool     $preserveKeys
     *
     * @return Chain
     */
    public function slice($offset, $length = null, $preserveKeys = false)
    {
        $this->array = array_slice($this->array, $offset, $length, $preserveKeys);

        return $this;
    }
}
