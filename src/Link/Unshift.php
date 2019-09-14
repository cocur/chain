<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

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
     * @return Chain
     */
    public function unshift($element): Chain
    {
        array_unshift($this->array, $element);

        return $this;
    }
}
