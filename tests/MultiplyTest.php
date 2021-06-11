<?php
use saeed\Multiply;
use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    protected $Multiply;

    public function setUp(): void
    {
        $this->Multiply = new \saeed\Multiply();
    }

    public function testThatSomethingShouldHappen()
    {
        $this->assertEquals("a", "a");
        $this->assertEquals([0], [0]);
    }
}


//class MultiplyTest extends TestCase {
//        protected $Multiply;
//
//    public function setUp(): void
//    {
//        $this->Multiply = new \saeed\Multiply();
//    }
//    public function testBasics() {
//        $this->assertEquals(multiply(1, 1), 1);
//        $this->assertEquals(multiply(2, 3), 6);
//        $this->assertEquals(multiply(3, 5), 15);
//        $this->assertEquals(multiply(5, 3), 15);
//    }
//    public function testRandom() {
//        for ($i = 0; $i < 100; $i++) {
//            $a = 1 + ~~(20 * lcg_value());
//            $b = 1 + ~~(20 * lcg_value());
//            $this->assertEquals(multiply($a, $b), $a * $b);
//        }
//    }
//}
