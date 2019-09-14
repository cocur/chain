<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Push.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Push
{
    /**
     * @param mixed $element
     *
     * @return Chain
     */
    public function push($element): Chain
    {
        array_push($this->array, $element);

        return $this;
    }
}
