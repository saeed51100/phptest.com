<?php

use saeed\MatrixAddition;
use PHPUnit\Framework\TestCase;


class MatrixAdditionTest extends TestCase
{

    protected $Rainfall;

    public function setUp(): void
    {
        $this->Rainfall = new MatrixAddition();
    }

    public function testRainfallBasics()
    {
        $this->assertEquals([[3, 5], [3, 5]], matrix_addition([[1, 2], [1, 2]], [[2, 3], [2, 3]]));
    }

}
