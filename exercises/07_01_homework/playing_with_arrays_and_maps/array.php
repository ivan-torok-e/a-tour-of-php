<?php


$this_is_an_array = [1,2,3,4,5];
array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $this_is_an_array);
$this_is_an_array[0]=47;
array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $this_is_an_array);
