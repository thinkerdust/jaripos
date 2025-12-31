<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('root');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');
Route::post('/reset-password', [AuthController::class, 'processResetPassword']);

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/lock-screen', [AuthController::class, 'lockScreen'])->name('lock-screen');
    Route::post('/unlock-screen', [AuthController::class, 'unlockScreen'])->name('unlock-screen');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

// Route::get('/', [RoutingController::class, 'index'])->name('root');
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])->name('any');
