<?php

namespace Cocur\Chain\Link;

/**
 * Unshift.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Unshift
{
    /**
     * @param mixed $element
     *
     * @return self
     */
    public function unshift($element): self
    {
        array_unshift($this->array, $element);

        return $this;
    }
}
