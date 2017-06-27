<?php

class Numbers {

    // Numbers can come in two main type
    // one is the Integer based
    //   * these are numbers that can be eiter positiv or negativ value
    //   * has no precision, which means it can't represent fractions
    // PHP is lazy by terms of types
    // If not enforced by syntax the original default is something like duck typing
    //   * if it's sounds, moves, behaves and interacted with as a Duck, than it's a duck
    //
    // Examples:
    //   1 + 1 == 2
    //   1 + 2 == 3
    //   1 / 2 == 0.5 # Beware!!! This is usualy 0 in other languages, because types usualy don't change with simple operators like "/"
    //   1 - 2 == -1
    //
    // ---------------------------------------------------------------------


    public function incrementByTwo($number) {
        return $number + 2;
    }

    public function dividedBySix($number) {
        return $number / 6;
    }
        

}