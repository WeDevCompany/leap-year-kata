<?php declare(strict_types=1);

namespace KataTests;

use Kata\Year;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function should_year_one_not_be_leap_year(): void
    {
        self::assertEquals(false, Year::isLeapYear(1));
    }

    /** @test */
    public function should_year_four_be_leap_year(): void
    {
        self::assertTrue(Year::isLeapYear(4));
    }

    /** @test */
    public function should_year_eight_be_leap_year(): void
    {
        self::assertTrue(Year::isLeapYear(8));
    }
}
