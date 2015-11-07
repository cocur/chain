<?php

namespace Cocur\Chain\Link;

/**
 * Splice.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Splice
{
    public function splice($offset, $length = null, $replacement = [])
    {
        if ($length) {
            array_splice($this->array, $offset, $length, $replacement);
        } else {
            array_splice($this->array, $offset);
        }
    }
}
