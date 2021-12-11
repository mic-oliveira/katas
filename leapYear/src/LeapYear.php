<?php

namespace Kata\LeapYear;

class LeapYear
{

    public function isLeapYear(int $year): bool
    {
        if (!$this->isDivisibleByFour($year)) {
            return false;
        }
        if ($this->isDivisibleByHundredAndNotFourHundred($year))
            return false;
        return true;
    }

    public function isDivisibleByFour(int $value): bool
    {
        return ($value % 4) === 0;
    }

    public function isDivibleByHundred(int $value): bool
    {
        return ($value % 100) === 0;
    }

    public function isDivisibleByFourHundred($value): bool
    {
        return ($value % 400) === 0;
    }

    public function isDivisibleByHundredAndNotFourHundred($value): bool
    {
        return $this->isDivibleByHundred($value) && !$this->isDivisibleByFourHundred($value);
    }

}
