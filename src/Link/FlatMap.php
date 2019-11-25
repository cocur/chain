<?php

namespace Cocur\Chain\Link;

/**
 * FlatMap.
 *
 * @author    Nicolas Reynis
 */
trait FlatMap
{
    /**
     * @param callable $callback
     *
     * @return self
     */
    public function flatMap(callable $callback): self
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
