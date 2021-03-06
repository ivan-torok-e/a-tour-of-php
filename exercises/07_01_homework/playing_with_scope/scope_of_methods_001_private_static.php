<?php

// this is an example for using the value of a variable in one method (methodA) while the variable was not defined there
// and an other method modified the value of that variablede by defining the variable as a privat static variable 
// within the class.

class class_for_testing_scopes{
    private static $variable_in_first_method = "actually, to make it work, i have to define the variable in the class first, so both functions can use it\n";

    function first_method_with_variable(){
        self::$variable_in_first_method = "this is the variable in the first method\n";
    }

    function second_method_without_variable(){
        echo self::$variable_in_first_method;
    }    
}

$first_instance_of_scope_testing = new class_for_testing_scopes();

$first_instance_of_scope_testing->second_method_without_variable();
$first_instance_of_scope_testing->first_method_with_variable();
$first_instance_of_scope_testing->second_method_without_variable();