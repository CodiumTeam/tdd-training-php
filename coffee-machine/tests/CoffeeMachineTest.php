<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    /** @test */
    public function xxx() {
        new CoffeeMachine();
        $this->assertEquals(true, true);
    }
}