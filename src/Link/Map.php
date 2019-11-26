<?php

namespace Cocur\Chain\Link;

/**
 * Map.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Map
{
    /**
     * @param callable $callback
     *
     * @return self
     */
    public function map(callable $callback): self
    {
        foreach ($this->array as $index => $element) {
            $this->array[$index] = $callback($element, $index);
        }

        return $this;
    }
}
