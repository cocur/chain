<?php

namespace Cocur\Chain\Link;

/**
 * Unshift
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Unshift
{
    /**
     * @param mixed $element
     *
     * @return Chain
     */
    public function unshift($element)
    {
        array_unshift($this->array, $element);

        return $this;
    }
}
