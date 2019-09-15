<?php

namespace Cocur\Chain\Link;

/**
 * Rand.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Rand
{
    /**
     * @param int $num
     *
     * @return mixed
     */
    public function rand(int $num = 1)
    {
        return array_rand($this->array, $num);
    }
}
