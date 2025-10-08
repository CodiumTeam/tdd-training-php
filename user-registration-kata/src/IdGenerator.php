<?php
declare(strict_types=1);

namespace UserRegistration;

interface IdGenerator
{
    public function generate(): int;

}