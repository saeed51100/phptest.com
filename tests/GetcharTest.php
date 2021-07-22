<?php

use PHPUnit\Framework\TestCase;
require '../src/Getchar.php';

class GetcharTest extends TestCase
{

    private string $getChar;

    public function setUp(): void
    {

        $this->assertTrue(true);
    }

    public function testSampleTests()
    {


        $this->assertEquals('A', getChar(65));

    }
}
