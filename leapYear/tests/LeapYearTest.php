<?php

namespace Kata\LeapYear\Tests;

use Kata\LeapYear\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /**
     * @dataProvider years
     */
    public function test_should_leap_year($year, $expected)
    {
        $leapYear = new LeapYear();
        $this->assertEquals($expected, $leapYear->isLeapYear($year));
    }

    public function years(): array
    {
        return [
            [1997, false],
            [1996, true],
            [1600, true],
            [1800, false]
        ];
    }

}
