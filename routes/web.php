<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// Halaman Welcome (Pengunjung)
Route::get('/', function () {
    return view('welcome'); // Halaman utama pengunjung
})->name('welcome');

// Register & Login Routes
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('user.register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Dashboard (Member & Admin)
Route::get('/member/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');