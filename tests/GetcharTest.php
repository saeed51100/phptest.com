<?php

use PHPUnit\Framework\TestCase;


class GetcharTest extends TestCase
{

    private string $getChar;

    public function setUp(): void
    {

        $this->assertTrue(true);
    }

    public function testSampleTests()
    {

        $_POST['getChar'] = 'A';
        ob_start();
        include '../src/Getchar.php';

        $this->assertEquals('A', getChar(65));

    }
}
