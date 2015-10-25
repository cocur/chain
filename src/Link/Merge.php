<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Merge.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Merge
{
    /**
     * @param Chain|array $array
     *
     * @return Chain
     */
    public function merge($array)
    {
        $this->array = array_merge($this->array, $array instanceof Chain ? $array->array : $array);

        return $this;
    }
}
