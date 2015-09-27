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
     * @param int      $flag
     *
     * @return Chain
     */
    public function filter(callable $callback, $flag = 0)
    {
        $this->array = array_filter($this->array, $callback, $flag);

        return $this;
    }
}
