<?php

use PHPUnit\Framework\TestCase;


class TmpTest extends TestCase
{
    public function testSampleTests()
    {



//        function getchar($c): string
//        {
//            return chr($c);
//        }

        $this->assertEquals('A', getChar(65));
    }
}
