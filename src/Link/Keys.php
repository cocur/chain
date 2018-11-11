<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Keys.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Keys
{
    /**
     * @return Chain
     */
    public function keys()
    {
        $this->array = array_keys($this->array);

        return $this;
    }
}
