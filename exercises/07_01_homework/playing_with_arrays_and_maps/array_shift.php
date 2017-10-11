<?php

require_once(dirname(__FILE__) . "/shared_custom_functions.php");

$this_is_an_array = array(1,2,3,4,5);
//explaining what is gonna happen next 
echo "this is an array: \n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);
//explaining what is gonna happen next 
echo "now we are going to remove the first item from the array.\n";
//removing the first item from the array
array_shift($this_is_an_array);
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);
//explaining what is gonna happen next 
echo "Now we are going to do it again, but we will give the value of the soon to be eliminated item to a variable at the same time\n";
//creating temp variable
$temp_storage_for_array_shift = "";
//giving the value of the first item in the array to the variable while shifting the array
$temp_storage_for_array_shift = array_shift($this_is_an_array);
//explaining what is gonna happen next 
echo "This is the content of the temp variable:\n";
//echoing the content of the temp variable
echo($temp_storage_for_array_shift . "\n");
//explaining what is gonna happen next 
echo "This is the content of array:\n";
//echoing all elements of an array using custom function
EchoAllElementsFromArray($this_is_an_array);