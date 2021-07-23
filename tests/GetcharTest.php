<?php

use PHPUnit\Framework\TestCase;

class GetcharTest extends TestCase
{


    public function setUp(): void
    {

        $this->assertTrue(true);
    }

    public function testSampleTests()
    {

        include "../src/Getchar.php";
        $this->assertEquals('A', getChar(65));

    }
}
