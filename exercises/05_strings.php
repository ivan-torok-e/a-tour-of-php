<?php

class Strings {

    // ### Strings are a textual primitive
    //
    // A string is a sequence of characters, like "Hello world!".
    // A string can be any text inside quotes. You can use single or double quotes
    // ---------------------------------------------------------------------


    // You can concat strings with the "." expression
    //   example: "dog" . " " . "cat" == "dog cat"
    //
    public function concatWordTextTo($text) {
<<<<<<< HEAD
        return $text . " world";
=======
            return $text . " world";
>>>>>>> 1134542fb76f934aa5c87dcf3fccdb7cd3d1549d
    }

    // You can create interpolated string with using the "." expression like hell,
    // or simply using the " string enclosing and creating interpolation expression with {$variableName}
    //  example:
    // $word = "barking"
    // "dog {$word}!" == "dog barking!"
    public function interpolateStringWith($textToBeInserted) {
<<<<<<< HEAD
        if ($textToBeInserted){
            return "Hello, {$textToBeInserted}!";
        } else {
            return "Hello, world!";
        }
        
=======
        return "Hello, {$textToBeInserted}!";
>>>>>>> 1134542fb76f934aa5c87dcf3fccdb7cd3d1549d
    }

}