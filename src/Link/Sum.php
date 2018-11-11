<?php

namespace Cocur\Chain\Link;

/**
 * Sum.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Sum
{
    /**
     * @return number
     */
    public function sum()
    {
        return array_sum($this->array);
    }
}
