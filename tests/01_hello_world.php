<?php

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase {

    public function testOutput() {
        $this->expectOutputString("Hello, world!");
        $hw = new HelloWorld();
        $hw->say();
    }

}