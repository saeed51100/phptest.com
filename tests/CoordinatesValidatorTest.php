<?php

use saeed\CoordinatesValidator;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    private $validCoordinates = [
        "-23, 25",
        "4, -3",
        "24.53525235, 23.45235",
        "04, -23.234235",
        "43.91343345, 143"
    ];
    private $invalidCoordinates = [
        "23.234, - 23.4234",
        "2342.43536, 34.324236",
        "N23.43345, E32.6457",
        "99.234, 12.324",
        "6.325624, 43.34345.345",
        "0, 1,2",
        "0.342q0832, 1.2324",
        "23.245, 1e1"
    ];
    protected $CoordinatesValidator;

    public function setUp(): void
    {
        $this->CoordinatesValidator = new CoordinatesValidator();
    }
    // test function names should start with "test"
    public function testValid() {
        foreach($this->validCoordinates as $c){
            $this->assertEquals(true, $this->CoordinatesValidator->isValidCoordinates($c));
        }
    }
    public function testInvalid() {
        foreach($this->invalidCoordinates as $c){
            $this->assertEquals(false, $this->CoordinatesValidator->isValidCoordinates($c));
        }
    }
}
