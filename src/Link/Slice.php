<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

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
    public function slice(int $offset, ?int $length = null, bool $preserveKeys = false): Chain
    {
        $this->array = array_slice($this->array, $offset, $length, $preserveKeys);

        return $this;
    }
}
