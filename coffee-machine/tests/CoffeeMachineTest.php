<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeMachine;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{

    #[Test]
    public function xxx(): void
    {
        new CoffeeMachine();

        $this->assertEquals(true, true);
    }
}