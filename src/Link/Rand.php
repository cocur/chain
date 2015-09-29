<?php

namespace Cocur\Chain\Link;

/**
 * Rand
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Rand
{
    /**
     * @param int $num
     *
     * @return mixed
     */
    public function rand($num = 1)
    {
        return array_rand($this->array, $num);
    }
}
