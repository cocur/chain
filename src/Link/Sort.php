<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class Sort
 *
 * @package     Cocur\Chain\Link
 * @author      Christoph Rosse
 */
trait Sort
{
    /**
     * Sort a Chain
     **
     * @param int|callable $options
     *
     * @return Chain
     */
    public function sort($options = SORT_REGULAR)
    {
        if ($options && is_callable($options)) {
            usort($this->array, $options);
        } else {
            sort($this->array, $options);
        }

        return $this;
    }
}