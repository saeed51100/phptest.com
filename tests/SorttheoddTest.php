<?php

use saeed\Sorttheodd;
use PHPUnit\Framework\TestCase;


class SorttheoddTest extends TestCase
{
    protected $Sorttheodd;

    public function setUp(): void
    {
        $this->Sorttheodd = new Sorttheodd();
    }

    public function testBasic() {
        $this->assertEquals([1, 3, 2, 8, 5, 4], $this->Sorttheodd->sortArray([5, 3, 2, 8, 1, 4]));
        $this->assertEquals([1, 3, 5, 8, 0], $this->Sorttheodd->sortArray([5, 3, 1, 8, 0]));
        $this->assertEquals([], $this->Sorttheodd->sortArray([]));
    }}


