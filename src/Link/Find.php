<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Find
 *
 * @package   Cocur\Chain\Link
 * @author    Christoph Rosse
 * @copyright 2017 Christoph Rosse
 */
trait Find
{
    /**
     * Find an element by a comparison callback.
     *
     * @param callable $callback
     *
     * @return Chain
     */
    public function find(callable $callback)
    {
        $result = array_filter($this->array, $callback);

        return empty($result) ? false : current($result);
    }
}
