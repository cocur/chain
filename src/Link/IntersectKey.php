<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * IntersectKey
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait IntersectKey
{
    /**
     * @param Chain|array $array
     *
     * @return Chain
     */
    public function intersectKey($array)
    {
        $this->array = array_intersect_key($this->array, $array instanceof Chain ? $array->array : $array);

        return $this;
    }
}
