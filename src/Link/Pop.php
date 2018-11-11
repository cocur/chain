<?php

namespace Cocur\Chain\Link;

/**
 * Pop.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
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
