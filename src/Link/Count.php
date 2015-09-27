<?php

namespace Cocur\Chain\Link;

/**
 * Count
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Count
{
    /**
     * @return int
     */
    public function count()
    {
        return count($this->array);
    }
}
