<?php

namespace FizzBuzz;

class FizzBuzz
{

    /**
     * @return bool
     */
    public function changeMe()
    {
        return true;
    }

    public function getList()
    {
        $numbers = range(1, 100);

        foreach($numbers as $key => $number) {
            if ($number % 15 == 0) {
                $numbers[$key] = "FizzBuzz";
                continue;
            }
            if ($number % 3 == 0) {
                $numbers[$key] = "Fizz";
            }
            if ($number % 5 == 0) {
                $numbers[$key] = "Buzz";
            }
        }

        return $numbers;
    }
}
