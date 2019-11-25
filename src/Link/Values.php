<?php

namespace Cocur\Chain\Link;

/**
 * Values.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Values
{
    /**
     * @return self
     */
    public function values(): self
    {
        $this->array = array_values($this->array);

        return $this;
    }
}
