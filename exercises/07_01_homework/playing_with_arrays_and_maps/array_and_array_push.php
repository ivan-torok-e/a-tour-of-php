<?php

require_once(dirname(__FILE__) . "/shared_custom_functions.php");

$this_is_an_array = array(1,2,3,4,5);
//explaining what is gonna happen next 
echo "this is an array: \n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);
//explaining what is gonna happen next 
echo "now we replace the first (position 0) value to 47.\n";
//replacing the first item in the arraz to 47
$this_is_an_array[0]=47;
//explaining what is gonna happen next 
echo "and this is the array now: \n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);
//explaining what is gonna happen next 
echo "adding a number and a string to the array.\n";
//adding a number and a string to the end of the array
array_push($this_is_an_array,42, "this is not a number");
//explaining what is gonna happen next 
echo "and this is the array now: \n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);

