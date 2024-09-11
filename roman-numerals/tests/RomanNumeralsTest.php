<?php

namespace RomanNumerals\Test;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    #[Test]
    public function change_me()
    {
        $romanNumerals = new RomanNumerals();
        $this->assertTrue($romanNumerals->changeMe());
    }
}
