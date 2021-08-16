<?php

namespace arrays;

use arrays\ArraysInterface;

class Arrays implements ArraysInterface
{
    /**
     * @param array $input
     * @return array
     */
    public function repeatArrayValues(array $input): array
    {
        $repetitivedArray = [];
        for ($i = 0; $i < count($input); $i++) {
            for ($j = 0; $j < $input[$i]; $j++) {
                $repetitivedArray[] = $input[$i];
            }
        }

        return $repetitivedArray;
    }

    /**
     * @param array $input
     * @return int
     */
    public function getUniqueValue(array $input): int
    {
        $countElementsArray = array_count_values($input);
        $lowestUniqueValue = 0;

        foreach ($countElementsArray as $key => $value) {
            if ($value !== 1 ) {
                continue;
            }
            if ($lowestUniqueValue === 0 || $key < $lowestUniqueValue) {
                $lowestUniqueValue = $key;
            }
        }
        
        return $lowestUniqueValue;
    }

    /**
     * @param array $input
     * @return array
     */
    public function groupByTag(array $input): array
    {
        $transformedArray = [];
        for ($i = 0; $i < count($input); $i++) {
           foreach ($input[$i]['tags'] as $key => $value) {
               $transformedArray[$value][] = $input[$i]['name'];
               usort($transformedArray[$value], function($nameFirst, $nameSecond) {
                   return strcmp($nameFirst, $nameSecond);
               });
           } 
        }
        ksort($transformedArray);

        return $transformedArray;
    }
}
