<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Filter
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Filter
{
    /**
     * @param callable $callback
     *
     * @return Chain
     */
    public function filter(callable $callback)
    {
        $this->array = array_filter($this->array, $callback);

        return $this;
    }
}
