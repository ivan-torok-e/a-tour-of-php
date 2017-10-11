<?php

require_once(dirname(__FILE__) . "/shared_custom_functions.php");

$this_is_an_array = array(1,2,3,4,5);
//explaining what is gonna happen next 
echo "this is an array: \n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);
//explaining what is gonna happen next 
echo "now we are going to add a 0 to the beginning of the array.\n";
//adding a zero to the beginning of the array
array_unshift($this_is_an_array, 0);
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);

