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
     * @return self
     */
    public function slice(int $offset, ?int $length = null, bool $preserveKeys = false): self
    {
        $this->array = array_slice($this->array, $offset, $length, $preserveKeys);

        return $this;
    }
}
