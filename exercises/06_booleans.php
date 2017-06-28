<?php

class BooleanTypesAndComparison {

    // ### Booleans
    // are logical representation for simple relations between objects.
    //
    // The two constant value that is used are
    //   - true
    //   - false
    //
    // The most common operators are:
    //   - >    is left side bigger than right
    //   - >=   is left side bigger or equal to right
    //   - <    is right side bigger than left
    //   - <=   is right side bigger or equal to left
    //   - ==   is the left and the right are equal
    //   - !=   does the two side are not equal
    //   - !    give me the inverse boolean value for this object
    //
    // To Chain multiple boolean expression together based, we usually use the two following expression
    //   - &&   if left is equal to true, check the right side and if both true, than the result is true
    //   - ||   if left side result not true, check right side and if any from the two side is eq to true than the result is true
    // ---------------------------------------------------------------------

    // two primitive given, check that the left side is bigger than the right
    public function isLeftBiggerThanRight($left, $right) {

    }

    // two primitive given, check that the left side is equal to the right side
    public function isLeftEqualToRight($left, $right) {

    }

    // two primitive given, check that the left side is equal to the right side
    public function isLeftEqualToRightInStrictComparison($left, $right) {

    }

    public function isFirstLesserThanSecondAndSecondBiggerThanThird($f, $s, $t) {

    }

    public function isFirstLesserThanSecondOrSecondBiggerThanThird($f, $s, $t) {

    }

}