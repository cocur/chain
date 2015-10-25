<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class SortKeys.
 *
 * @author      Christoph Rosse
 */
trait SortKeys
{
    /**
     * Sort a Chain by its keys.
     **.
     *
     * @param int $sortFlags
     *
     * @return Chain
     */
    public function sortKeys($sortFlags = SORT_REGULAR)
    {
        ksort($this->array, $sortFlags);

        return $this;
    }
}
