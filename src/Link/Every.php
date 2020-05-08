<?php

namespace Cocur\Chain\Link;

/**
 * Every.
 *
 * @author    Nicolas Reynis
 */
trait Every
{
    /**
     * @param callable $callback
     *
     * @return bool
     */
    public function every(callable $callback): bool
    {
        $pass = true;
        foreach ($this->array as $index => $element) {
            $pass = $pass && $callback($element, $index);
        }

        return $pass;
    }
}
