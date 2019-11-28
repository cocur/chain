<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Merge.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Merge
{
    /**
     * Merge arrays.
     *
     * Merge the elements of one array with the elements of the array in the Chain.
     *
     * @param Chain|array $array   Array to merge with
     * @param array       $options options, including `recursive` to merge arrays recursive
     *
     * @return self
     */
    public function merge($array, array $options = []): self
    {
        $options = array_merge(['recursive' => false], $options);

        if ($options['recursive']) {
            $this->array = array_merge_recursive($this->array, $array instanceof Chain ? $array->array : $array);
        } else {
            $this->array = array_merge($this->array, $array instanceof Chain ? $array->array : $array);
        }

        return $this;
    }
}
