<?php

namespace Cocur\Chain\Link;

/**
 * Flip
 *
 * @package   Cocur\Chain\Link
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
