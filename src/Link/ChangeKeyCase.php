<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class ChangeKeyCase.
 *
 * @author      Christoph Rosse
 */
trait ChangeKeyCase
{
    /**
     * Changes the case of all keys in an array.
     *
     * Changes all keys from lowercased or uppercased. Numbered indices are left as is.
     *
     * @param int $case Either `CASE_UPPER` or `CASE_LOWER` (default).
     *
     * @return Chain
     */
    public function changeKeyCase(int $case = CASE_LOWER): Chain
    {
        $this->array = array_change_key_case($this->array, $case);

        return $this;
    }
}
