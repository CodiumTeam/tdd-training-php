<?php

namespace RomanNumerals\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    #[Test]
    public function one_is_I(): void
    {
        $romanNumerals = new RomanNumerals();

        $this->assertEquals("I", $romanNumerals->convertToRoman(1));
    }

    #[Test]
    public function two_is_II(): void
    {
        $romanNumerals = new RomanNumerals();

        $this->assertEquals("II", $romanNumerals->convertToRoman(2));
    }
}
