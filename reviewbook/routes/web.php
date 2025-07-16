<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'showRegisterForm']);
Route::post('/welcome', [FormController::class, 'handleRegister']);
Route::get('/welcome', [FormController::class, 'showWelcome']);

