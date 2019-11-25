<?php

namespace Cocur\Chain\Link;

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
     * @return self
     */
    public function sortKeys($sortBy = SORT_REGULAR, array $options = []): self
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
    private function sortKeysWithFlags(int $sortFlags = SORT_REGULAR, array $options = []): void
    {
        if (!empty($options['reverse'])) {
            krsort($this->array, $sortFlags);
        } else {
            ksort($this->array, $sortFlags);
        }
    }
}
