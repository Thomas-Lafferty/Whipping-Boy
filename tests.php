<?php

class StartTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function firstTest()
    {
        $this->assertEquals(1+2, 3);
    }
}
