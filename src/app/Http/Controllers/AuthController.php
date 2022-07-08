<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class AuthController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function login()
    {
        return view('auth-login');
    }

    public function doLogin()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (\Auth::attempt(request()->only(['email', 'password']))) {
            return redirect('/');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Does not exist!'
        ]);
    }

    public function register()
    {
        return view('auth-register');
    }

    public function doRegister()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = $this->userService->create(request('name'), request('email'), request('password'));

        \Auth::login($user);

        return redirect()->route('login');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect('/');
    }
}
