<?php

use saeed\ScalingSquaredStrings;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $ScalingSquaredStrings;

    public function setUp(): void
    {
        $this->ScalingSquaredStrings = new ScalingSquaredStrings();
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testScalingBasics()
    {
        $a = "abcd\nefgh\nijkl\nmnop";
        $r = "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp";
        $this->revTest($this->ScalingSquaredStrings->scale($a, 2, 3), $r);

        $this->revTest($this->ScalingSquaredStrings->scale("CG\nla", 2, 3), "CCGG\nCCGG\nCCGG\nllaa\nllaa\nllaa");
    }

}


