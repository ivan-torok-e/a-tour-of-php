<?php

use PHPUnit\Framework\TestCase;

final class RequireOnceTest extends TestCase {

    public function testRequireIsWritten() {
        new Example();
    }

}