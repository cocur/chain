<?php

namespace Cocur\Chain;

use ArrayAccess;
use ArrayIterator;
use Cocur\Chain\Link\Count;
use Cocur\Chain\Link\Diff;
use Cocur\Chain\Link\Fill;
use Cocur\Chain\Link\Filter;
use Cocur\Chain\Link\Intersect;
use Cocur\Chain\Link\IntersectAssoc;
use Cocur\Chain\Link\IntersectKey;
use Cocur\Chain\Link\Map;
use Cocur\Chain\Link\Merge;
use Cocur\Chain\Link\Pop;
use Cocur\Chain\Link\Push;
use Cocur\Chain\Link\Reduce;
use Cocur\Chain\Link\Shift;
use Cocur\Chain\Link\Sum;
use Cocur\Chain\Link\Unshift;
use IteratorAggregate;
use Traversable;

/**
 * Chain
 *
 * @package   Cocur\Chain
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class Chain implements ArrayAccess, IteratorAggregate
{
    use Count,
        Diff,
        Filter,
        Fill,
        Intersect,
        IntersectAssoc,
        IntersectKey,
        Map,
        Merge,
        Pop,
        Push,
        Reduce,
        Shift,
        Sum,
        Unshift;

    /**
     * @var array
     */
    public $array;

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    /**
     * @return Traversable
     */
    public function getIterator()
    {
        return new ArrayIterator($this->array);
    }

    /**
     * @param mixed $offset
     *
     * @return boolean
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
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->array[$offset] = $value;
    }

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}
