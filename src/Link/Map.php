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
        $this->array = array_map($callback, $this->array);

        return $this;
    }
}
