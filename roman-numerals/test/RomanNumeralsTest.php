<?php

namespace RomanNumerals\Test;

use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function change_me()
    {
        $romanNumerals = new RomanNumerals();
        $this->assertTrue($romanNumerals->changeMe());
    }
}
