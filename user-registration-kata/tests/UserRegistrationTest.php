<?php

namespace UserRegistration\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use UserRegistration\IdGenerator;
use UserRegistration\User;
use UserRegistration\UserRegistration;
use UserRegistration\UserRepository;

class UserRegistrationTest extends TestCase
{
    private UserRepository $userRepository;
    private IdGenerator $idGenerator;
    private UserRegistration $userRegistration;

    #[Test]
    public function user_is_persisted_when_everything_is_correct(): void
    {
        $this->idGenerator->method("generate")->willReturn(123);

        $this->userRepository->expects($this->once())
            ->method('save')
            ->with(new User(123, "an@email.com", "password_1"));

        $this->userRegistration->register("an@email.com", "password_1");
    }

    #[Test]
    public function user_is_not_persisted_when_email_is_already_in_use(): void
    {
        $this->idGenerator->method("generate")
            ->willReturn(123);
        $this->userRepository->method("findByEmail")
            ->willReturn(new User(123, "an@email.com", "password_1"));

        $this->userRepository->expects($this->never())
            ->method('save');

        $this->userRegistration->register("an@email.com", "password_1");
    }

    #[Test]
    public function user_is_not_persisted_when_password_has_less_than_9_characters(): void
    {
        $this->idGenerator->method("generate")
            ->willReturn(123);

        $this->userRepository->expects($this->never())
            ->method('save');

        $this->userRegistration->register("an@email.com", "passwo_1");
    }
    #[Test]
    public function user_is_not_persisted_when_password_does_not_contain_an_underscore(): void
    {
        $this->idGenerator->method("generate")
            ->willReturn(123);

        $this->userRepository->expects($this->never())
            ->method('save');

        $this->userRegistration->register("an@email.com", "password13");
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->idGenerator = $this->createStub(IdGenerator::class);
        $this->userRegistration = new UserRegistration($this->userRepository, $this->idGenerator);
    }
}