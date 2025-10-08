<?php

namespace UserRegistration;

class UserRegistration
{
    private IdGenerator $idGenerator;

    public function __construct(private readonly UserRepository $userRepository, IdGenerator $idGenerator)
    {
        $this->idGenerator = $idGenerator;
    }

    public function register(string $email, string $password): void
    {
        $id = $this->idGenerator->generate();
        $this->userRepository->save(new User($id, $email, $password));
    }
}