<?php

namespace Cocur\Chain\Link;

/**
 * Find.
 *
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
     * @return mixed|bool Found element, `false` if no result is found
     */
    public function find(callable $callback)
    {
        $result = array_filter($this->array, $callback);

        return empty($result) ? false : current($result);
    }
}
