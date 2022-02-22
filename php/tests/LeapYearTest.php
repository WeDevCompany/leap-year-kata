<?php declare(strict_types=1);

namespace KataTests;

use Kata\Year;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function should_one_not_be_leap_year(): void
    {
        self::assertEquals(false, Year::isLeapYear(1));
    }
}
