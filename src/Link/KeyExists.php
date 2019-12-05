<?php

namespace Cocur\Chain\Link;

/**
 * KeyExists.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait KeyExists
{
    /**
     * Checks if the given key or index exists in the array.
     *
     * Returns `true` if the given `key` is set in the array. `key` can be any value possible for an array index.
     * Returns `true` if a key exists with a `null` value.
     *
     * @param mixed $key key or index to check
     *
     * @return bool `true` if key or index exists in array, `false` otherwise
     */
    public function keyExists($key): bool
    {
        return array_key_exists($key, $this->array);
    }
}
