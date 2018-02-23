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

    /** @test */
    public function it_should_get_list_of_100_items()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals(100, count($list));
    }

    /** @test */
    public function it_should_get_list_gives_first_number_1()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals(1, $list[0]);
    }

    /** @test */
    public function it_should_get_list_gives_97th_number_98()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals(98, $list[97]);
    }

    /** @test */
    public function it_should_convert_third_item_to_Fizz()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals("Fizz", $list[2]);
    }

    /** @test */
    public function it_should_convert_fifth_item_to_Buzz()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals("Buzz", $list[4]);
    }

    /** @test */
    public function it_should_convert_15th_item_to_FizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $list = $fizzBuzz->getList();

        $this->assertEquals("FizzBuzz", $list[14]);
    }
}
