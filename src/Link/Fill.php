<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Fill.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Fill
{
    /**
     * @param int   $startIndex
     * @param int   $num
     * @param mixed $value
     *
     * @return Chain
     */
    public static function fill($startIndex, $num, $value = null)
    {
        return new self(array_fill($startIndex, $num, $value));
    }
}
