<?php

use PHPUnit\Framework\TestCase;



class MyTestCases extends TestCase
{
    public function testSampleTests() {
        function getChar($c)
        {
            return chr($c);
        }

        $this->assertEquals('A', getChar(65));
    }
}