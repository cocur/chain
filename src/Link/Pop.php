<?php

namespace Cocur\Chain\Link;

/**
 * Pop.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Pop
{
    /**
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->array);
    }
}
