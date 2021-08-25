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
            $repetitivedArray = array_merge($repetitivedArray, array_fill(count($repetitivedArray), $input[$i], $input[$i]));
        }

        return $repetitivedArray;
    }

    /**
     * @param array $input
     * @return int
     */
    public function getUniqueValue(array $input): int
    {
        $countElementsArray = array_filter(array_count_values($input), function($item) {
            return $item === 1;
        });
        
        return count($countElementsArray) > 0 ? min(array_keys($countElementsArray)) : 0;
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
