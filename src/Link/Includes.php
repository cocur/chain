<?php

namespace Cocur\Chain\Link;

/**
 * Includes.
 *
 * @author    Nicolas Reynis
 */
trait Includes
{
    /**
     * Returns `true` if the given `needle` is in the array or `false` otherwise.
     *
     * @param $needle
     * @param array $options options, including `strict` to also check the type
     *
     * @return bool
     */
    public function includes($needle, array $options = []): bool
    {
        if (!empty($options['strict'])) {
            return in_array($needle, $this->array, $options['strict']);
        } else {
            return in_array($needle, $this->array);
        }
    }
}
