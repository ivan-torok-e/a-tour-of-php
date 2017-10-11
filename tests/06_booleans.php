<?php

use PHPUnit\Framework\TestCase;

class BooleanTypesAndComparisonTest extends TestCase {

    public function testIsLeftBiggerThanRight() {
        $subject = new BooleanTypesAndComparison();

        $this->assertEquals(false, $subject->isLeftBiggerThanRight(1, 2));
        $this->assertEquals(false, $subject->isLeftBiggerThanRight(1, 5));
        $this->assertEquals(false, $subject->isLeftBiggerThanRight(1, "9"));
        $this->assertEquals(true, $subject->isLeftBiggerThanRight(2, 1));
        $this->assertEquals(false, $subject->isLeftBiggerThanRight(2, 2));
    }

    public function testIsLeftEqualToRight() {
        $subject = new BooleanTypesAndComparison();

        $this->assertEquals(false, $subject->isLeftEqualToRight(1, 2));
        $this->assertEquals(false, $subject->isLeftEqualToRight(1, 5));
        $this->assertEquals(false, $subject->isLeftEqualToRight(1, "9"));
        $this->assertEquals(true, $subject->isLeftEqualToRight(2, 2));
        $this->assertEquals(false, $subject->isLeftEqualToRight(2, 3));
    }

    public function testIsLeftEqualToRightInStrictComparison() {
        $subject = new BooleanTypesAndComparison();

        $this->assertEquals(false, $subject->isLeftEqualToRightInStrictComparison(1, 2));
        $this->assertEquals(false, $subject->isLeftEqualToRightInStrictComparison(1, 5));
        $this->assertEquals(false, $subject->isLeftEqualToRightInStrictComparison(1, "9"));
        $this->assertEquals(true, $subject->isLeftEqualToRightInStrictComparison(2, 2));
        $this->assertEquals(false, $subject->isLeftEqualToRightInStrictComparison(2, "2"));
    }

    public function testIsFirstLesserThanSecondAndSecondBiggerThanThird()    {
        $subject = new BooleanTypesAndComparison();

        $this->assertEquals(true, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(1, 2, 1));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(1, 5, 3));
        $this->assertEquals(false, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(5, 2, 3));
        $this->assertEquals(false, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(0, 0, 0));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(1, 42, 40));
        $this->assertEquals(false, $subject->isFirstLesserThanSecondAndSecondBiggerThanThird(2, 2, 1));
    }

    public function testIsFirstLesserThanSecondOrSecondBiggerThanThird()    {
        $subject = new BooleanTypesAndComparison();

        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(1, 2, 1));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(1, 5, 3));
        $this->assertEquals(false, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(5, 2, 3));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(5, 2, 1));
        $this->assertEquals(false, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(0, 0, 0));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(1, 42, 40));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(43, 42, 40));
        $this->assertEquals(true, $subject->isFirstLesserThanSecondOrSecondBiggerThanThird(2, 2, 1));
    }

}