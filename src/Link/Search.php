<?php

namespace Cocur\Chain\Link;

/**
 * Search.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Search
{
    /**
     * @param mixed $needle
     * @param bool  $strict
     *
     * @return mixed
     */
    public function search($needle, bool $strict = false)
    {
        return array_search($needle, $this->array, $strict);
    }
}
