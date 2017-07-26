<?php

// In php I usually separate two main group when we talk about "values"/"objects"
//
// Data Types or primitives
//    * String
//    * Integer
//    * Float (floating point numbers - also called double)
//    * Boolean
//    * Array
//    * Object
//    * NULL
//
// ---
// Classes are the blueprints for your idea that you want to model.
// One of the big differences between functions and classes is that a class contains
// both data (variables) and functions that form a package called an: ‘object’.
//
//
// Your task here is to
//    * create a new class by your self alone
//      * you can use the previous exercises
//    * create a public method with the name of #checkTypeOf
//    * it takes one parameter
//    * it will return the received value's type as a string
//      * you must use the use the internet for this in order to find out how to get a values type
//


class TypesAndClasses {
    public function checkTypeOf($valueToBeCheckedForType){
        return gettype($valueToBeCheckedForType);
    }
}