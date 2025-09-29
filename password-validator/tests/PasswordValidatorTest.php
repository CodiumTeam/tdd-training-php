<?php

declare(strict_types=1);

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{

    #[Test]
    public function change_me(): void
    {
        $passwordValidator = new PasswordValidator();

        self::assertTrue($passwordValidator->changeMe());
    }
}
