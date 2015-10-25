<?php

namespace Cocur\Chain\Link;

/**
 * Flip.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Flip
{
    /**
     * @return Chain
     */
    public function flip()
    {
        $this->array = array_flip($this->array);

        return $this;
    }
}
