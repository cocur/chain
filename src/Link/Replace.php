<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Replace.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Replace
{
    /**
     * @param Chain|array $array
     *
     * @return self
     */
    public function replace($array): self
    {
        $this->array = array_replace($this->array, $array instanceof Chain ? $array->array : $array);

        return $this;
    }
}
