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
     * @param int $sortFlags
     *
     * @return Chain
     */
    public function sort($sortFlags = SORT_REGULAR)
    {
        sort($this->array, $sortFlags);

        return $this;
    }
}