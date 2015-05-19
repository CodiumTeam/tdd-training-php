<?php

namespace RomanNumerals\Test;

use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function change_me()
    {
        $fizzBuzz = new RomanNumerals();
        $this->assertTrue($fizzBuzz->changeMe());
    }
}
