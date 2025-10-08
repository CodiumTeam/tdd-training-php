<?php
declare(strict_types=1);

namespace UserRegistration;

final class User
{

    public function __construct(private readonly int $id, private readonly string $email, private readonly  string $password)
    {
    }
}