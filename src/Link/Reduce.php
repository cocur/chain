<?php

namespace Cocur\Chain\Link;

/**
 * Reduce
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Reduce
{
    /**
     * @param callable $callback
     * @param mixed    $initial
     *
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->array, $callback, $initial);
    }
}
