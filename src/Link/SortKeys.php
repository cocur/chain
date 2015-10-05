<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class SortKeys
 *
 * @package     Cocur\Chain\Link
 * @author      Christoph Rosse
 */
trait SortKeys
{
    /**
     * Sort a Chain by its keys.
     **
     * @param int|callable $options
     *
     * @return Chain
     */
    public function sortKeys($options = SORT_REGULAR)
    {
        if ($options && is_callable($options)) {
            uksort($this->array, $options);
        } else {
            ksort($this->array, $options);
        }

        return $this;
    }
}