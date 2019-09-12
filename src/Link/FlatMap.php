<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * FlatMap.
 *
 * @author    Nicolas Reynis
 */
trait FlatMap
{
    /**
     * @return Chain
     */
    public function flatMap(callable $callback)
    {
        $flattened = [];
        foreach ($this->array as $index => $element) {
            $transformation = $callback($element, $index);
            if (is_array($transformation)) {
                array_push($flattened, ...$transformation);
            } else {
                $flattened[] = $transformation;
            }
        }
        $this->array = $flattened;

        return $this;
    }
}
