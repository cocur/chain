<?php

namespace Cocur\Chain\Link;

/**
 * Pad.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Pad
{
    /**
     * @param int   $size
     * @param mixed $value
     *
     * @return self
     */
    public function pad(int $size, $value): self
    {
        $this->array = array_pad($this->array, $size, $value);

        return $this;
    }
}
