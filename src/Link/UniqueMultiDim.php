<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Unique Multidimensional.
 *
 * @author    Paulo Félix
 */
trait UniqueMultiDim
{
    /**
     * @return Chain
     */

    public function uniqueMultiDim($key=null)
    {
        if (isset($key)){
            $tempArray = array(); 
            $keyArray = array(); 
            $i = 0; 
            
            foreach($this->array as $val) { 
                if (!in_array($val[$key], $keyArray)) { 
                    $keyArray[$i] = $val[$key]; 
                    $tempArray[$i] = $val; 
                } 
                $i++; 
            } 
    
            $this->array = $tempArray;
        }else{
            $this->array = array_values(array_map("unserialize", array_unique(array_map("serialize", $this->array))));
        }
        return $this;
    }
}
