<?php

namespace UserRegistration;

class UserRegistration
{
    public function __construct(private readonly UserRepository $userRepository, private readonly IdGenerator $idGenerator, private readonly PasswordValidator $passwordValidator)
    {
    }

    public function register(string $email, string $password): void
    {
        if ($this->userRepository->findByEmail($email) || $this->passwordValidator->isInvalid($password)) {
            return;
        }
        $id = $this->idGenerator->generate();
        $this->userRepository->save(new User($id, $email, $password));
    }

}