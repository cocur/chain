<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Simple, therefore quicker merge.
 * @author    Andrey Tsarev
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait SimpleMerge
{
    /**
     * Merge arrays.
     * Merge the elements of one array with the elements of the array in the Chain.
     * @param Chain|array $array Array to merge with
     * @return self
     */
    public function simpleMerge( $array ) : self
    {
        $array = $array instanceof Chain ? $array->array : $array;
        foreach ($array as $item) {
            $this->array[] = $item;
        }

        return $this;
    }
}
