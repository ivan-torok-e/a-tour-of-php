<?php

$first_variable_in_file_a = "this is a variable in the first line of the a.php file\n";
echo $first_variable_in_file_a;

function first_method($first_variable_in_file_a) {
    echo $first_variable_in_file_a;
    $first_variable_in_file_a = "now i gave a new value to this variable inside the first_method\n";
    echo $first_variable_in_file_a;    
}

first_method($first_variable_in_file_a);
echo $first_variable_in_file_a;

require_once(dirname(__FILE__) . "/b.php");
echo $first_variable_in_file_b;

