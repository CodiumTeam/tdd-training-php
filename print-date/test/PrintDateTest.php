<?php

namespace PrintDate\Test;

use PrintDate\PrintDate;

class PrintDateTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_test_system_methods()
    {
        $printDate = new PrintDate();
        $printDate->printCurrentDate();
        $this->fail('This not test anything');
    }
}