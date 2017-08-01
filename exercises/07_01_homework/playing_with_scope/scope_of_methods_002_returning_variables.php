<?php
// this is an example for using the value of a variable in one method (methodA) while the variable was defined in
// a different method (methodB) by returning the value of the variable from the method where it was defined
// and using it as an input parameter in the other method.

class class_for_testing_scopes{

    function first_method_with_variable(){
        $variable_in_first_method = "this is the variable in the first method\n";
        return $variable_in_first_method;
    }

    function second_method_without_variable($temp_variable_for_second_method){
        echo $temp_variable_for_second_method;
    }    
}

$first_instance_of_scope_testing = new class_for_testing_scopes();

$first_instance_of_scope_testing->second_method_without_variable($first_instance_of_scope_testing->first_method_with_variable());