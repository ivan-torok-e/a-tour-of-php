<?php

function EchoAllElementsFromArray($array){
    array_map( function($temp_function_array){echo $temp_function_array . "\n";}, $array);
};