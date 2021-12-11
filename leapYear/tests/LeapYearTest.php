<?php

namespace Kata\LeapYear\Tests;

use Kata\LeapYear\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    public function test_should_leap_year()
    {
        $leapYear = new LeapYear();
        $this->assertFalse($leapYear->isLeapYear(1997));
        $this->assertTrue($leapYear->isLeapYear(1996));
        $this->assertTrue($leapYear->isLeapYear(1600));
    }
}
