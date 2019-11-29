<?php

namespace Cocur\Chain\Link;

/**
 * Splice.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Splice
{
    /**
     * Remove a portion of the array and replace it with something else.
     *
     * @param int      $offset
     * @param int|null $length
     * @param array    $replacement
     *
     * @return self
     */
    public function splice(int $offset, ?int $length = null, $replacement = []): self
    {
        if (func_num_args() > 1) {
            array_splice($this->array, $offset, $length, $replacement);
        } else {
            array_splice($this->array, $offset);
        }

        return $this;
    }
}
