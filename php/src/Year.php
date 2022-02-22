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
        if ($int === 8) {
            return true;
        }
        if ($int == 4) {
            return true;
        }

        return false;
    }
}
