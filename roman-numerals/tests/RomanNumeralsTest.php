<?php

namespace RomanNumerals\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    #[Test]
    public function change_me(): void
    {
        $romanNumerals = new RomanNumerals();

        $this->assertEquals("", $romanNumerals->changeMe());
    }
}
