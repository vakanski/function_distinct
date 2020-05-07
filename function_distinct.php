<?php 
/**
 * Define template file.
 * 
 * @param array $arr the input array
 */

function distinct($arr)
{
    //remove duplicate values from array using array_unique
    $unique_array = array_unique($arr);
    //sort the resulting array`
    sort($unique_array);

    $one_array = array_count_values($arr);
    $number_of_one_rep = $one_array[1];
    $number_of_one_rep_minus_first = $number_of_one_rep - 1;
    $new_one_arrey = array_fill(1, $number_of_one_rep_minus_first, 1);
    $merge = array_merge($unique_array, $new_one_arrey);

    //dump it to verify
    $string = implode(",", $merge);
    echo $string;
}

$arr = array(3, 3, 1, 1, 9);

distinct($arr)

?>