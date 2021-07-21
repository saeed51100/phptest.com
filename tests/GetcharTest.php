<?php

use PHPUnit\Framework\TestCase;


class GetcharTest extends TestCase
{

    public function setUp(): void
    {
        if (isset($_POST['getChar'])) {
            unset($_POST['getChar']);
        }
    }

    public function testSampleTests()
    {
        $_POST['getChar'] = 'bar';
        ob_start();
        include('../src/Getchar.php');
        $this->assertEquals('A', getChar(65));

    }
}
