<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Intersect
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Intersect
{
    /**
     * @param Chain|array $array2
     *
     * @return Chain
     */
    public function intersect($array2)
    {
        $this->array = array_intersect($this->array, $array2 instanceof Chain ? $array2->array : $array2);

        return $this;
    }
}
