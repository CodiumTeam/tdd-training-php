<?php
declare(strict_types=1);

namespace UserRegistration;

final class PasswordValidator
{

    public function __construct()
    {
    }

    public function isInvalid(string $password): bool
    {
        return strlen($password) <= 8 || !str_contains($password, '_');
    }
}