<?php

namespace Cocur\Chain;

use Cocur\Chain\Link\ChangeKeyCase;
use Cocur\Chain\Link\Combine;
use Cocur\Chain\Link\Count;
use Cocur\Chain\Link\Diff;
use Cocur\Chain\Link\Fill;
use Cocur\Chain\Link\Filter;
use Cocur\Chain\Link\Flip;
use Cocur\Chain\Link\Intersect;
use Cocur\Chain\Link\IntersectAssoc;
use Cocur\Chain\Link\IntersectKey;
use Cocur\Chain\Link\Keys;
use Cocur\Chain\Link\Map;
use Cocur\Chain\Link\Merge;
use Cocur\Chain\Link\Pad;
use Cocur\Chain\Link\Pop;
use Cocur\Chain\Link\Product;
use Cocur\Chain\Link\Push;
use Cocur\Chain\Link\Rand;
use Cocur\Chain\Link\Reduce;
use Cocur\Chain\Link\Replace;
use Cocur\Chain\Link\Reverse;
use Cocur\Chain\Link\Search;
use Cocur\Chain\Link\Shift;
use Cocur\Chain\Link\Shuffle;
use Cocur\Chain\Link\Slice;
use Cocur\Chain\Link\Sort;
use Cocur\Chain\Link\SortKeys;
use Cocur\Chain\Link\Sum;
use Cocur\Chain\Link\Unique;
use Cocur\Chain\Link\Unshift;
use Countable;

/**
 * Chain.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class Chain extends AbstractChain implements Countable
{
    use ChangeKeyCase,
        Combine,
        Count,
        Diff,
        Filter,
        Fill,
        Flip,
        Intersect,
        IntersectAssoc,
        IntersectKey,
        Keys,
        Map,
        Merge,
        Pad,
        Pop,
        Product,
        Push,
        Rand,
        Reduce,
        Replace,
        Reverse,
        Search,
        Shift,
        Shuffle,
        Slice,
        Sort,
        SortKeys,
        Sum,
        Unique,
        Unshift;

    /**
     * @param array $array
     *
     * @return Chain
     */
    public static function create(array $array = [])
    {
        $chain        = new static();
        $chain->array = $array;

        return $chain;
    }
}
