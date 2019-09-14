<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Flip.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Flip
{
    /**
     * @return Chain
     */
    public function flip(): Chain
    {
        $this->array = array_flip($this->array);

        return $this;
    }
}
