<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Values.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Values
{
    /**
     * @return Chain
     */
    public function values(): Chain
    {
        $this->array = array_values($this->array);

        return $this;
    }
}
