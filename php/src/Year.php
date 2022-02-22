<?php declare(strict_types=1);

namespace Kata;

class Year
{
    public static function isLeapYear(int $int): bool
    {
        return $int % 4 === 0 && ($int % 100 !== 0 || $int % 400 === 0);
    }
}
