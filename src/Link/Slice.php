<?php

namespace Cocur\Chain\Link;

/**
 * Slice
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Slice
{
    /**
     * @param int      $offset
     * @param int|null $length
     * @param bool     $preserveKeys
     */
    public function slice($offset, $length = null, $preserveKeys = false)
    {
        $this->array = array_slice($this->array, $offset, $length, $preserveKeys);
    }
}
