<?php

use PHPUnit\Framework\TestCase;

function myMessage() {
   return "hello mello!";  // Use return instead of echo
}

class MessageTest extends TestCase
{
    public function testMessageWorks()
    {
        $this->assertEquals("hello mello!", myMessage());
    }
}