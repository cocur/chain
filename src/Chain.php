<?php

namespace Cocur\Chain;

use Cocur\Chain\Link\Count;
use Cocur\Chain\Link\Diff;
use Cocur\Chain\Link\Fill;
use Cocur\Chain\Link\Filter;
use Cocur\Chain\Link\Intersect;
use Cocur\Chain\Link\Map;
use Cocur\Chain\Link\Reduce;
use Cocur\Chain\Link\Sum;

/**
 * Chain
 *
 * @package   Cocur\Chain
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class Chain
{
    use Count,
        Diff,
        Filter,
        Fill,
        Intersect,
        Map,
        Reduce,
        Sum;

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
}
