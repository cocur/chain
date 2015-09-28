<?php

namespace Cocur\Chain\Link;

/**
 * Shift
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
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
