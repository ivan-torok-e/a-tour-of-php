<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase {

    public function testConcatingExc() {
        $s = new Strings();

        $this->assertEquals("Hello, world" , $s->concatWordTextTo("Hello,"));
        $this->assertEquals("bup world" , $s->concatWordTextTo("bup"));
        $this->assertEquals("sup? world" , $s->concatWordTextTo("sup?"));
    }

    public function testInterpolateStringWith() {
        $s = new Strings();

        $this->assertEquals("Hello, world!" , $s->interpolateStringWith("world"));
        $this->assertEquals("Hello, David!" , $s->interpolateStringWith("David"));
        $this->assertEquals("Hello, you awesome!" , $s->interpolateStringWith("you awesome"));
    }

}