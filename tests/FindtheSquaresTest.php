<?php

use saeed\FindtheSquares;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $FindtheSquares;

    public function setUp(): void
    {
        $this->FindtheSquares = new FindtheSquares();
    }

    public function testBasicTests() {
        $this->assertEquals('25-16',$this->FindtheSquares->findSquares(9) );
        $this->assertEquals('9-4',$this->FindtheSquares->findSquares(5) );
    }

    public function testBiggerNumbers() {
        $this->assertEquals('1681-1600',$this->FindtheSquares->findSquares(81) );
        $this->assertEquals('169-144',$this->FindtheSquares->findSquares(25) );
    }

}


