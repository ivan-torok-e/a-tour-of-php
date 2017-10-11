<?php

use PHPUnit\Framework\TestCase;

class TypesAndClassesTest extends TestCase {

    public function instance() {
        return new TypesAndClasses();
    }

    public function testANewClassIsCreated() {
        $this->instance();
    }

    public function testAParameterThatHasTypeDefined() {
        $examples = array(
            "string" => 'foo',
            "integer" => 1 ,
            "double" => 1.0,
            "NULL" => NULL,
            "object" => new stdClass(),
            "array" => array(),
            "boolean" => TRUE,
        );

        $instance = $this->instance();

        foreach ($examples as $expected => $whenValueIs) {
            $actually = $instance->checkTypeOf($whenValueIs);

            $this->assertEquals($expected, $actually);
        }

    }

}