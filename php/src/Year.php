<?php declare(strict_types=1);

namespace Kata;

class Year
{
    public function theMethod(): bool
    {
        return true;
    }

    public static function isLeapYear(int $int): bool
    {
        return $int % 4 === 0 && ($int % 100 !== 0);
    }
}
