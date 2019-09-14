<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

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
     * @return Chain
     */
    public function pad(int $size, $value): Chain
    {
        $this->array = array_pad($this->array, $size, $value);

        return $this;
    }
}
