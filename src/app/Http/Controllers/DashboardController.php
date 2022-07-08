<?php

namespace App\Http\Controllers;

use App\Jobs\CreateTickets;
use App\Models\User;
use App\Services\UserService;

class DashboardController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function hello()
    {
        return view('dashboard');
    }
}
