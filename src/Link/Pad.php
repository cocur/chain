<?php

namespace Cocur\Chain\Link;

/**
 * Pad
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Pad
{
    /**
     * @param int   $size
     * @param mixed $value
     *
     * @return Chain
     */
    public function pad($size, $value)
    {
        $this->array = array_pad($this->array, $size, $value);

        return $this;
    }
}
