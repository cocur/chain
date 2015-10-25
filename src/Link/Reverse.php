<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Reverse.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Reverse
{
    /**
     * @param bool $preserveKeys
     *
     * @return Chain
     */
    public function reverse($preserveKeys = false)
    {
        $this->array = array_reverse($this->array, $preserveKeys);

        return $this;
    }
}
