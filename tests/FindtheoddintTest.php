<?php

use saeed\Findtheoddint;
use PHPUnit\Framework\TestCase;


class FindtheoddintTest extends TestCase
{
    protected $Findtheoddint;

    public function setUp(): void
    {
        $this->Findtheoddint = new Findtheoddint();
    }

    public function testFindItReturnsValueAppearingOddNumberOfTimes()
    {
        $this->assertEquals(5, $this->Findtheoddint->findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]));
        $this->assertEquals(-1, $this->Findtheoddint->findIt([1,1,2,-2,5,2,4,4,-1,-2,5]));
        $this->assertEquals(5, $this->Findtheoddint->findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]));
        $this->assertEquals(10, $this->Findtheoddint->findIt([10]));
        $this->assertEquals(10, $this->Findtheoddint->findIt([1,1,1,1,1,1,10,1,1,1,1]));
    }
}


