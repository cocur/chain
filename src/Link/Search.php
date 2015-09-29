<?php

namespace Cocur\Chain\Link;

/**
 * Search
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Search
{
    /**
     * @param mixed $needle
     * @param bool  $strict
     *
     * @return mixed
     */
    public function search($needle, $strict = false)
    {
        return array_search($needle, $this->array, $strict);
    }
}
