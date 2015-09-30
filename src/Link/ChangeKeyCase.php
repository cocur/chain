<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Class ChangeKeyCase
 *
 * @package     Cocur\Chain\Link
 * @author      Christoph Rosse
 */
trait ChangeKeyCase
{
    /**
     * Changes the case of all keys in an array.
     *
     * @param int $case
     *
     * @return Chain
     */
    public function changeKeyCase($case = CASE_LOWER)
    {
        $this->array = array_change_key_case($this->array, $case);

        return $this;
    }
}