<?php declare(strict_types=1);

namespace KataTests;

use Kata\Year;
use PHPUnit\Framework\TestCase;
use Iterator;

class LeapYearTest extends TestCase
{

    /**
     * @return iterator<int>
     */
    public function privideLeapYear(): iterator
    {
        yield "four" => [4];
        yield "eight" => [8];
        yield "twelve" => [12];
    }

    /** @test */
    public function should_year_one_not_be_leap_year(): void
    {
        self::assertEquals(false, Year::isLeapYear(1));
    }

    /**
     * @test
     * @dataProvider privideLeapYear
     */
    public function should_year_be_leap_year(int $year): void
    {
        self::assertTrue(Year::isLeapYear($year));
    }
}
