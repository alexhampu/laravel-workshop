<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryImpl;
use App\Services\UserService;
use App\Services\UserServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        UserService::class => UserServiceImpl::class,
        UserRepository::class => UserRepositoryImpl::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
