<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Mahasiswa Route
Route::prefix('home')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

});
Route::get('/login', [GuestController::class, 'showLoginForm'])->name('login');
Route::post('/login', [GuestController::class, 'login']);
Route::get('/logout', [GuestController::class, 'logout'])->middleware('auth');

Route::get('/register', [GuestController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [GuestController::class, 'store']);

Route::view('/lomba', 'users.lomba');
Route::view('/lomba-details', 'users.lomba-details');
Route::view('/partner', 'users.partner');
Route::view('/partner-details', 'users.partner-details');
Route::view('/profile', 'users.profile');
Route::view('/profile-edit', 'users.profile-edit');

// Admin Route
Route::view('/admin', 'admins.dashboard');
Route::view('/admin-create', 'admins.dashboard-create');
Route::view('/admin-update', 'admins.dashboard-update');
