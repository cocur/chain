<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Intersect.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Intersect
{
    /**
     * @param Chain|array $array2
     *
     * @return self
     */
    public function intersect($array2): self
    {
        $this->array = array_intersect($this->array, $array2 instanceof Chain ? $array2->array : $array2);

        return $this;
    }
}
