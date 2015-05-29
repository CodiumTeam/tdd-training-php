<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;

class PasswordValidatorTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function change_me()
    {
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->changeMe());
    }
}
