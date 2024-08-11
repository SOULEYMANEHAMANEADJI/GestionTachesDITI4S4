<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\TachController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Regrouper les routes CRUD sous l'intergiciel d'authentification
Route::middleware(['auth'])->group(function () {
    Route::resource('employe', EmployeController::class);
    Route::resource('tache', TachController::class);
    Route::resource('competence', CompetenceController::class);
});
