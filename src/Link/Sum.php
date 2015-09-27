<?php

namespace Cocur\Chain\Link;

/**
 * Sum
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
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
