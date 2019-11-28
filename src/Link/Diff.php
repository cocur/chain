<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Diff.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Diff
{
    /**
     * Computes the difference of arrays.
     *
     * Compares the array to another array or instance of `Cocur\Chain\Chain` and will set the array of elements that
     * are not present in the other array.
     *
     * @param Chain|array $array2 an array or instance of `Cocur\Chain\Chain` to compare against
     *
     * @return self
     */
    public function diff($array2): self
    {
        $this->array = array_diff(
            $this->array,
            $array2 instanceof Chain ? $array2->array : $array2
        );

        return $this;
    }
}
