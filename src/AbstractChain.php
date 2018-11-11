<?php

namespace Cocur\Chain;

use ArrayAccess;
use ArrayIterator;
use IteratorAggregate;
use JsonSerializable;

/**
 * Chain.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
abstract class AbstractChain implements ArrayAccess, IteratorAggregate, JsonSerializable
{
    /**
     * @var array
     */
    public $array = [];

    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->array);
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->array[$offset]);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->array[$offset];
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->array[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->array;
    }
}
