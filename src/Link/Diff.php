<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Diff.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Diff
{
    /**
     * @param Chain|array $array2
     *
     * @return Chain
     */
    public function diff($array2)
    {
        $this->array = array_diff(
            $this->array,
            $array2 instanceof Chain ? $array2->array : $array2
        );

        return $this;
    }
}
