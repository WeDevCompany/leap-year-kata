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
    public function privideNotLeapYear(): iterator
    {
        yield "one" => [1];
        yield "two" => [2];
        yield "three" => [3];
        yield "one thousand nine hundred ninety seven" => [1997];
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


}
