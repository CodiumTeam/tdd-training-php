<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    #[Test]
    public function it_should_test_something(): void
    {
        $fizzBuzz = new FizzBuzz();

        $currentValue = $fizzBuzz->changeMe();

        $this->assertTrue($currentValue);
    }
}
