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
        if ($this->userRepository->findByEmail($email) || strlen($password) <= 8 || !str_contains($password, '_')) {
            return;
        }
        $id = $this->idGenerator->generate();
        $this->userRepository->save(new User($id, $email, $password));
    }
}