<?php

namespace Cocur\Chain\Link;

/**
 * Product
 *
 * @package   Cocur\Chain\Link
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
trait Product
{
    /**
     * @return number
     */
    public function product()
    {
        return array_product($this->array);
    }
}
