<?php

use saeed\Multiply;
use PHPUnit\Framework\TestCase;

//class MultiplyTest extends TestCase
//{
//    protected $Multiply;
//
//    public function setUp(): void
//    {
//        $this->Multiply = new \saeed\Multiply();
//    }
//
//    public function testThatSomethingShouldHappen()
//    {
//        $this->assertEquals("a", "a");
//        $this->assertEquals([0], [0]);
//    }
//}


class MultiplyTest extends TestCase
{
    protected $Multiply;

    public function setUp(): void
    {
        $this->Multiply = new \saeed\Multiply();
    }

    public function testBasics()
    {
        $this->assertEquals(1, $this->Multiply->multiply(1, 1));
        $this->assertEquals(6, $this->Multiply->multiply(2, 3));
        $this->assertEquals(15, $this->Multiply->multiply(3, 5));
        $this->assertEquals(15, $this->Multiply->multiply(5, 3));
    }

    public function testRandom()
    {
        for ($i = 0; $i < 100; $i++) {
            $a = 1 + ~~(20 * lcg_value());
            $b = 1 + ~~(20 * lcg_value());
            $this->assertEquals($this->Multiply->multiply($a, $b), $a * $b);
        }
    }
}
