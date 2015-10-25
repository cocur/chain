<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class SortKeys.
 *
 * @author      Christoph Rosse
 * @author      Florian Eckerstorfer <florian@eckerstorfer.co>
 */
trait SortKeys
{
    /**
     * Sort a Chain by its keys.
     *
     * @param int|callable $sortBy
     * @param array        $options
     *
     * @return Chain
     */
    public function sortKeys($sortBy = SORT_REGULAR, array $options = [])
    {
        if ($sortBy && is_callable($sortBy)) {
            uksort($this->array, $sortBy);
        } else {
            $this->sortKeysWithFlags($sortBy, $options);
        }

        return $this;
    }

    /**
     * @param int   $sortFlags
     * @param array $options
     */
    private function sortKeysWithFlags($sortFlags = SORT_REGULAR, array $options = [])
    {
        if (!empty($options['reverse'])) {
            krsort($this->array, $sortFlags);
        } else {
            ksort($this->array, $sortFlags);
        }
    }
}
