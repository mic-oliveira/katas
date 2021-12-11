<?php

namespace Kata\LeapYear\Tests;

use Kata\LeapYear\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    public function should_leap_year()
    {
        $leapYear = new LeapYear();
        $this->assertFalse($leapYear->isLeapYear(1997));
    }
}
