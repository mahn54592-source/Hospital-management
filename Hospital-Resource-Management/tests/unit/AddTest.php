<?php

use PHPUnit\Framework\TestCase;

// Define the function before the test class
function add($a, $b) {
    return $a + $b;
}

class AddTest extends TestCase
{
    public function testAddWorks()
    {
        $this->assertEquals(5, add(2, 3));
    }
}