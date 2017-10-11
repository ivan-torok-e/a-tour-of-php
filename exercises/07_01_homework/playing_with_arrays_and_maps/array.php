<?php


$this_is_an_array = array(1,2,3,4,5);
echo "this is an array: \n";
array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $this_is_an_array);
echo "now we replace the first (position 0) value to 47.\n";
$this_is_an_array[0]=47;
echo "and this is the array now: \n";
array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $this_is_an_array);
echo "adding a number and a string to the array.\n";
array_push($this_is_an_array,42, "this is not a number");
echo "and this is the array now: \n";
array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $this_is_an_array);

