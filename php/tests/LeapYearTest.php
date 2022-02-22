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
        yield "one thousand nine hundred ninety six" => [1996];

    }

    /**
     * @return iterator<int>
     */
    public function privideLeapYearMultipleFourHundred(): iterator
    {
        yield "four hundred" => [400];
        yield "eight hundred" => [800];
        yield "one thousand two hundred" => [1200];
        yield "one thousand six hundred" => [1600];

    }

    /**
     * @return iterator<int>
     */
    public function privideNotLeapYear(): iterator
    {
        yield "one" => [1];
        yield "two" => [2];
        yield "three" => [3];
        yield "one thousand nine hundred ninety seven" => [1997];
        yield "a hundred" => [100];
        yield "two hundred" => [200];
        yield "three hundred" => [300];
        yield "five hundred" => [500];
    }

    /**
     * @test
     * @dataProvider privideLeapYear
     */
    public function should_year_be_leap_year(int $year): void
    {
        self::assertTrue(Year::isLeapYear($year));
    }

    /**
     * @test
     * @dataProvider privideNotLeapYear
    */
    public function should_year_not_be_leap_year(int $year): void
    {
        self::assertFalse(Year::isLeapYear($year));
    }

    /**
     * @test
     * @dataProvider privideLeapYearMultipleFourHundred
    */
    public function should_year_be_leap_year_and_divisible_by_four_hundred(int $year): void
    {
        self::assertTrue(Year::isLeapYear($year));
    }
}
