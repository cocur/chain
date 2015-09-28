<?php

namespace Cocur\Chain\Link;

/**
 * Push
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Push
{
    /**
     * @param mixed $element
     *
     * @return Chain
     */
    public function push($element)
    {
        array_push($this->array, $element);

        return $this;
    }
}
