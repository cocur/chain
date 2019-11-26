<?php

namespace Cocur\Chain\Link;

/**
 * Class Sort.
 *
 * @author      Christoph Rosse
 * @author      Florian Eckerstorfer <florian@eckerstorfer.co>
 */
trait Sort
{
    /**
     * Sort a Chain.
     *
     * @param int|callable $sortBy
     * @param array        $options
     *
     * @return self
     */
    public function sort($sortBy = SORT_REGULAR, array $options = []): self
    {
        if (!$sortBy) {
            $sortBy = SORT_REGULAR;
        }
        if ($sortBy && is_callable($sortBy)) {
            $this->sortWithCallback($sortBy, $options);
        } else {
            $this->sortWithFlags($sortBy, $options);
        }

        return $this;
    }

    /**
     * @param callable $callback
     * @param array    $options
     */
    private function sortWithCallback(callable $callback, array $options = []): void
    {
        if (isset($options['assoc']) && $options['assoc']) {
            uasort($this->array, $callback);
        } else {
            usort($this->array, $callback);
        }
    }

    /**
     * @param int   $sortFlags
     * @param array $options
     */
    private function sortWithFlags(int $sortFlags = SORT_REGULAR, array $options = []): void
    {
        if (!empty($options['assoc']) && !empty($options['reverse'])) {
            arsort($this->array, $sortFlags);
        } elseif (!empty($options['assoc'])) {
            asort($this->array, $sortFlags);
        } elseif (!empty($options['reverse'])) {
            rsort($this->array, $sortFlags);
        } else {
            sort($this->array, $sortFlags);
        }
    }
}
