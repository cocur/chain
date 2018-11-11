<?php

namespace Cocur\Chain\Link;

/**
 * Shift.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Shift
{
    /**
     * @return mixed
     */
    public function shift()
    {
        return array_shift($this->array);
    }
}
