<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepository
{
    public function create(string $name, string $email, string $password): User;
}
