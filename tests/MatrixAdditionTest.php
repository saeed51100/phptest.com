<?php

use saeed\MatrixAddition;
use PHPUnit\Framework\TestCase;


class MatrixAdditionTest extends TestCase
{

    protected $Matrix_addition;

    public function setUp(): void
    {
        $this->Matrix_addition = new MatrixAddition();
    }

    public function testRainfallBasics()
    {
        $this->assertEquals([[3, 5], [3, 5]], $this->Matrix_addition->matrix_addition([[1, 2], [1, 2]], [[2, 3], [2, 3]]));
    }

}
