<?php

use PHPUnit\Framework\TestCase;

class GetcharTest extends TestCase
{

    public function setUp(): void
    {
        require '../src/Getchar.php';

        $this->assertTrue(true);
    }

    public function testSampleTests()
    {


        $this->assertEquals('A', getChar(65));

    }
}
