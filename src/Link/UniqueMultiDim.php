<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Unique Multidimensional.
 *
 * @author    Paulo Félix
 * @copyright 2019 Paulo Félix
 */
trait UniqueMultiDim
{
    public function uniqueMultiDim($key)
    {
        $tempArray = array(); 
        $i = 0; 
        $keyArray = array(); 
        
        foreach($this->array as $val) { 
            if (!in_array($val[$key], $keyArray)) { 
                $keyArray[$i] = $val[$key]; 
                $tempArray[$i] = $val; 
            } 
            $i++; 
        } 

        $this->array = $tempArray;
        return $this;
    }
}
