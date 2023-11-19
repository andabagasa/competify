<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InformasiLombaController;
use App\Http\Middleware\Admin;

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
Route::get('/', [DashboardController::class, 'index']);

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
Route::get('/admin/lomba', [InformasiLombaController::class, 'index']);
Route::get('/admin/lomba-create', [InformasiLombaController::class, 'create']);
Route::post('/admin/lomba-create', [InformasiLombaController::class, 'store']);

Route::view('/admin', 'admins.dashboard')->middleware('admin');
// Route::view('/admin/lomba', 'admins.lomba.lomba');
// Route::view('/admin/lomba-create', 'admins.lomba.lomba-create');
Route::view('/admin/lomba-update', 'admins.lomba.lomba-update');
Route::view('/admin/kategori', 'admins.kategori.kategori');
Route::view('/admin/kategori-create', 'admins.kategori.kategori-create');
Route::view('/admin/kategori-update', 'admins.kategori.kategori-update');
