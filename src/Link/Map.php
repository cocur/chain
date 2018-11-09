<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Map.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Map
{
    /**
     * @param callable $callback
     *
     * @return Chain
     */
    public function map(callable $callback)
    {
        foreach ($this->array as $index => $element) {
            $this->array[$index] = $callback($element, $index);
        }

        return $this;
    }
}
