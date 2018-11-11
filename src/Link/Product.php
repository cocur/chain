<?php

namespace Cocur\Chain\Link;

/**
 * Product.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
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
