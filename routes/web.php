<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/customers', [DashboardController::class, 'customers'])->name('customers');
Route::get('/drivers', [DashboardController::class, 'drivers'])->name('drivers');
Route::get('/rides', [DashboardController::class, 'rides'])->name('rides');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::middleware('guest')->group(function () {
//     Route::get('/', function () {
//         return view('auth.login');
//     });
//     Route::post('/login', [AuthController::class, 'login'])->name('login');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/customers', [DashboardController::class, 'customers'])->name('customers');
//     Route::get('/drivers', [DashboardController::class, 'drivers'])->name('drivers');
//     Route::get('/rides', [DashboardController::class, 'rides'])->name('rides');
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });
