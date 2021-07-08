<?php

use saeed\Stringendswith;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $Stringendswith;

    public function setUp(): void
    {
        $this->Stringendswith = new Stringendswith();
    }

    public function testFixedTests() {
        $this->assertEquals(true, $this->Stringendswith->solution("samurai", "ai"));
        $this->assertEquals(false, $this->Stringendswith->solution("sumo", "omo"));
        $this->assertEquals(true, $this->Stringendswith->solution("ninja", "ja"));
        $this->assertEquals(true, $this->Stringendswith->solution("sensei", "i"));
        $this->assertEquals(false, $this->Stringendswith->solution("samurai", "ra"));
        $this->assertEquals(false, $this->Stringendswith->solution("abc", "abcd"));
        $this->assertEquals(true, $this->Stringendswith->solution("abc", "abc"));
        $this->assertEquals(true, $this->Stringendswith->solution("abcabc", "bc"));
        $this->assertEquals(false, $this->Stringendswith->solution('ails', 'fails'));
        $this->assertEquals(true, $this->Stringendswith->solution('fails', 'ails'));
        $this->assertEquals(false, $this->Stringendswith->solution('this', 'fails'));
        $this->assertEquals(true, $this->Stringendswith->solution('yes this will pass', ''));
        $this->assertEquals(false, $this->Stringendswith->solution('this will not pass', '`^$<>()[]*|'));
        $this->assertEquals(false, $this->Stringendswith->solution("abc\n", 'abc'), 'Watch out for \n in the end');
    }
}

