<?php

namespace Cocur\Chain\Link;

/**
 * Some.
 *
 * @author    Nicolas Reynis
 */
trait Some
{
    /**
     * @param callable $callback
     *
     * @return bool
     */
    public function some(callable $callback): bool
    {
        foreach ($this->array as $index => $element) {
            if ($callback($element, $index)) {
                return true;
            }
        }

        return false;
    }
}
