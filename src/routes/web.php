<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('groups.index');
    });
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::resource('tokens', \App\Http\Controllers\TokenController::class);
    Route::resource('groups', \App\Http\Controllers\GroupController::class);
    Route::resource('feeds', \App\Http\Controllers\FeedController::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('do-login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'doRegister'])->name('do-register');
});

Route::get('/email/verify', function () {
    return view('auth-verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
