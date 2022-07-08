<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Auth\Events\Registered;

class UserRepositoryImpl implements UserRepository
{
    public function create(string $name, string $email, string $password): User
    {
        $user = User::create(compact('name', 'email', 'password'));

        event(new Registered($user));

        return $user;
    }
}
