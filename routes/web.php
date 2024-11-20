<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Auth\Login;
use App\Livewire\CreateUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', CreateUser::class);
Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/user', [DashboardController::class, 'user'])->name('user.dashboard');
});
