<?php

class PlayingWithFunctions {
    // instance functions can be either public or private,
    // this is true for the module methods (singleton methods) too.

    // implement the "theAnswerIs" method that returns 42
<<<<<<< HEAD

    function theAnswerIs() {
        return 42;
    }

    // implement the "upcase" method that takes in one string
    // arguement and after upcase -it, than it returns the new value
    function upcase($stringArgument) {
        return strtoupper ($stringArgument);
    }
    // implement a "downcase" method that has default value of "NOPE",
    // but still able to receive arguement
    function downcase($stringArgument = "NOPE") {
        return strtolower($stringArgument);

=======
    function theAnswerIs() {
        return 42;
    }
    // implement the "upcase" method that takes in one string
    // arguement and after upcase -it, than it returns the new value
    function upcase($stringToUpperCase) {
        return strtoupper($stringToUpperCase);
    } 
    // implement a "downcase" method that has default value of "NOPE",
    // but still able to receive arguement
    function downcase($stringToDownCase="NOPE") {
        return strtolower($stringToDownCase);
>>>>>>> 1134542fb76f934aa5c87dcf3fccdb7cd3d1549d
    }
}