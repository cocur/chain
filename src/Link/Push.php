<?php

namespace Cocur\Chain\Link;

/**
 * Push.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Push
{
    /**
     * @param mixed $element
     *
     * @return self
     */
    public function push($element): self
    {
        array_push($this->array, $element);

        return $this;
    }
}
