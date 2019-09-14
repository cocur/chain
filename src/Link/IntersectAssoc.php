<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * IntersectAssoc.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait IntersectAssoc
{
    /**
     * @param Chain|array $array
     *
     * @return Chain
     */
    public function intersectAssoc($array): Chain
    {
        $this->array = array_intersect_assoc($this->array, $array instanceof Chain ? $array->array : $array);

        return $this;
    }
}
