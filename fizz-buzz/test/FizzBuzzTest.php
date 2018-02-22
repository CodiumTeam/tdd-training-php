<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_should_test_something()
    {

        $fizzBuzz = new FizzBuzz();
        $this->assertTrue($fizzBuzz->changeMe());
    }
}
