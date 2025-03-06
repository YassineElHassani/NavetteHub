<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'signup'])->name('register.post');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'signin'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/company_dashboard', [AuthController::class, 'company_dashboard'])->name('company_dashboard');
Route::get('/index', [AuthController::class, 'view'])->name('view')->middleware(AuthMiddleware::class);