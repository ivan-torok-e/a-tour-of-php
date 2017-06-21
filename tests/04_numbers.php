<?php

use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase {

    public function testIncrementByTwo() {
        $n = new Numbers();

        $this->assertEquals(4 , $n->incrementByTwo(2));
        $this->assertEquals(4 , $n->incrementByTwo("2"));
        $this->assertEquals(6 , $n->incrementByTwo(4));
    }

    public function testDividedBySix() {
        $n = new Numbers();

        $this->assertEquals(2 , $n->dividedBySix(12));
        $this->assertEquals(4 , $n->dividedBySix(24));
        $this->assertEquals(4/6 , $n->dividedBySix(4));
        $this->assertEquals(4/6 , $n->dividedBySix("4"));
    }

}