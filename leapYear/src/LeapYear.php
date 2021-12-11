<?php

namespace Kata\LeapYear;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        if (!$this->isDivisibleByFour($year)) {
            return false;
        }
        return true;
    }

    public function isDivisibleByFour(int $value): bool
    {
        return ($value % 4) == 0;
    }

}