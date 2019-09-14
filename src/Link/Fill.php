<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Fill.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Fill
{
    /**
     * Create a new Chain and fill with values.
     *
     * Creates a new Chain and fills the array with `num` entries of the value of `value` parameters, keys starting
     * at the `startIndex` parameter.
     *
     * @param int   $startIndex The first index of the array. If `startIndex` is negative, the first index of the
     *                          returned array will be `startIndex` and the following indices will start from zero.
     * @param int   $num        Number of elements to insert. Must be greater than or equal to zero.
     * @param mixed $value      Value to use for filling.
     *
     * @return Chain
     */
    public static function fill(int $startIndex, int $num, $value = null): Chain
    {
        return new self(array_fill($startIndex, $num, $value));
    }
}
