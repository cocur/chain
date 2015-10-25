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
     * @param Chain|array $keys
     * @param Chain|array $values
     *
     * @return Chain
     */
    public function combine($keys, $values)
    {
        $this->array = array_combine(
            $keys instanceof Chain ? $keys->array : $keys,
            $values instanceof Chain ? $values->array : $values
        );

        return $this;
    }
}
