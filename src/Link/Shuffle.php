<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Shuffle.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Shuffle
{
    /**
     * @return Chain
     */
    public function shuffle(): Chain
    {
        shuffle($this->array);

        return $this;
    }
}
