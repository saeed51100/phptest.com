<?php

use PHPUnit\Framework\TestCase;
//require '../src/Getchar.php';

class GetcharTest extends TestCase
{


    public function setUp(): void
    {

        $this->assertTrue(true);
    }

    public function testSampleTests()
    {

        require '../src/Getchar.php';
        $this->assertEquals('A', getChar(65));

    }
}
