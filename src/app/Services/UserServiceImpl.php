<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserServiceImpl implements UserService
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function create(string $name, string $email, string $password): User
    {
        return $this->userRepository->create($name, $email, $password);
    }
}
