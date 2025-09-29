<?php

namespace CoffeeMachine;

interface DrinkMaker
{
    public function execute($command): void;
}