<?php

namespace Cocur\Chain\Link;

/**
 * Keys.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Keys
{
    /**
     * @return self
     */
    public function keys(): self
    {
        $this->array = array_keys($this->array);

        return $this;
    }
}
