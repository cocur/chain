<?php

namespace Cocur\Chain\Link;

/**
 * Shuffle
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Shuffle
{
    /**
     * @return Chain
     */
    public function shuffle()
    {
        shuffle($this->array);

        return $this;
    }
}
