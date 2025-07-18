<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'showRegisterForm']);
Route::post('/welcome', [FormController::class, 'handleRegister']);
Route::get('/welcome', [FormController::class, 'showWelcome']);

// CRUD Categories
// C => Create Data
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre/create', [GenreController::class, 'store']);

// R => Read Data
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// U => Update Data
Route::put('/genre/{id}', [GenreController::class, 'update']); 
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);

// D => Delete Data
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);