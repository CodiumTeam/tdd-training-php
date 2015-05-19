<?php

namespace RomanNumerals\Test;

use RomanNumerals\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function change_me()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->changeMe());
    }
}
