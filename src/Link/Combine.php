<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class ChangeKeyCase.
 *
 * @author      Christoph Rosse
 */
trait Combine
{
    /**
     * Creates an Chain by using one Chain for keys and another for its values.
     *
     * @param Chain|array $keys   Array or instance of `Cocur\Chain\Chain` of keys to be used. Illegal values for key
     *                            will be converted to string.
     * @param Chain|array $values array or instance of `Cocur\Chain\Chain` of values to be used
     *
     * @return self
     */
    public function combine($keys, $values): self
    {
        $this->array = array_combine(
            $keys instanceof Chain ? $keys->array : $keys,
            $values instanceof Chain ? $values->array : $values
        );

        return $this;
    }
}
