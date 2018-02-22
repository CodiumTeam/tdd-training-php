<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /** @test */
    public function change_me()
    {
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->changeMe());
    }
}
