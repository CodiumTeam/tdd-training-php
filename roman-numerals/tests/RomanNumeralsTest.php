<?php

namespace RomanNumerals\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    public static function example_numbers(): array
    {
        return [
            [1, "I"],
            [2, "II"],
            [3, "III"],
            [4, "IV"],
            [5, "V"],
            [6, "VI"],
            [7, "VII"],
            [8, "VIII"],
            [9, "IX"],
            [10, "X"],
            [14, "XIV"],
            [20, "XX"],
            [40, "XL"],
            [50, "L"],
        ];
    }

    #[Test]
    #[DataProvider('example_numbers')]
    public function transform_decimal_numbers_to_roman(int $decimal, string $expectedRoman): void
    {
        $romanNumerals = new RomanNumerals();

        $this->assertEquals($expectedRoman, $romanNumerals->convertToRoman($decimal), "$decimal is $expectedRoman");
    }

}
