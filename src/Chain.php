<?php

namespace Cocur\Chain;

use Cocur\Chain\Link\ChangeKeyCase;
use Cocur\Chain\Link\Combine;
use Cocur\Chain\Link\Count;
use Cocur\Chain\Link\CountValues;
use Cocur\Chain\Link\Diff;
use Cocur\Chain\Link\Fill;
use Cocur\Chain\Link\Filter;
use Cocur\Chain\Link\First;
use Cocur\Chain\Link\Find;
use Cocur\Chain\Link\FlatMap;
use Cocur\Chain\Link\Flip;
use Cocur\Chain\Link\Intersect;
use Cocur\Chain\Link\IntersectAssoc;
use Cocur\Chain\Link\IntersectKey;
use Cocur\Chain\Link\Join;
use Cocur\Chain\Link\KeyExists;
use Cocur\Chain\Link\Keys;
use Cocur\Chain\Link\Last;
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
use Cocur\Chain\Link\Splice;
use Cocur\Chain\Link\Sum;
use Cocur\Chain\Link\Unique;
use Cocur\Chain\Link\Unshift;
use Cocur\Chain\Link\Values;
use Countable;

/**
 * Chain.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2017 Florian Eckerstorfer
 */
class Chain extends AbstractChain implements Countable
{
    use ChangeKeyCase;
    use Combine;
    use Count;
    use CountValues;
    use Diff;
    use Fill;
    use Filter;
    use Find;
    use First;
    use FlatMap;
    use Flip;
    use Intersect;
    use IntersectAssoc;
    use IntersectKey;
    use Join;
    use KeyExists;
    use Keys;
    use Last;
    use Map;
    use Merge;
    use Pad;
    use Pop;
    use Product;
    use Push;
    use Rand;
    use Reduce;
    use Replace;
    use Reverse;
    use Search;
    use Shift;
    use Shuffle;
    use Slice;
    use Sort;
    use SortKeys;
    use Splice;
    use Sum;
    use Unique;
    use Unshift;
    use Values;

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    /**
     * @param array $array
     *
     * @return self
     */
    public static function create(array $array = []): self
    {
        return new static($array);
    }

    /**
     * @param string $delimiter If the option `regexp` is `true` this must be a regular expression
     * @param string $string
     * @param array  $options   if the option `regexp` is `true` the string is split by using `preg_split()`, otherwise
     *                          `explode()` is used
     *
     * @return self
     */
    public static function createFromString(string $delimiter, string $string, array $options = []): self
    {
        $options = array_merge(['regexp' => false], $options);
        $chain   = new static();

        if ($options['regexp']) {
            $chain->array = preg_split($delimiter, $string);
        } else {
            $chain->array = explode($delimiter, $string);
        }

        return $chain;
    }
}
