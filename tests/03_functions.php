<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase {

    public function testCreateAFunctionThatReturnsTheNumber42() {
        $pwf = new PlayingWithFunctions();
        $this->assertEquals(42, $pwf->theAnswerIs());
    }

    public function testCreateFuncThatTakesOneArguementAndUpcaseIt() {
        $pwf = new PlayingWithFunctions();
        $this->assertEquals("OK", $pwf->upcase("ok"));
    }

    public function testCreateFuncThatTakesOneArguementOptionallyAndDowncaseIt() {
        $pwf = new PlayingWithFunctions();
        $this->assertEquals("ok", $pwf->downcase("OK"));
        $this->assertEquals("nope", $pwf->downcase());
    }

}