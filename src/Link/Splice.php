<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Splice.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Splice
{
    /**
     * Remove a portion of the array and replace it with something else
     *
     * @param int $offset
     * @param int|null $length
     * @param array $replacement
     *
     * @return Chain
     */
    public function splice(int $offset, ?int $length = null, $replacement = []): Chain
    {
        if ($length) {
            array_splice($this->array, $offset, $length, $replacement);
        } else {
            array_splice($this->array, $offset);
        }

        return $this;
    }
}
