<?php

declare(strict_types=1);

namespace PrintDate\Test;

use PHPUnit\Framework\TestCase;
use PrintDate\PrintDate;

final class PrintDateTest extends TestCase
{
    /** @test */
    public function it_test_system_methods(): void
    {
        $printDate = new PrintDate();

        $printDate->printCurrentDate();

        // I don't know how to test it
    }
}
