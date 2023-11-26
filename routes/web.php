<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InformasiLombaController;
use App\Http\Controllers\MahasiswaController;
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
Route::get('/lomba', [DashboardController::class, 'showLombas']);
Route::get('/profile', [MahasiswaController::class, 'profile']);
Route::get('/profile-edit/{id}', [MahasiswaController::class, 'edit'])->name('profile.edit');
Route::put('/profile-edit/{id}', [MahasiswaController::class, 'update'])->name('profile.update');

Route::get('/login', [GuestController::class, 'showLoginForm'])->name('login');
Route::post('/login', [GuestController::class, 'login']);
Route::get('/logout', [GuestController::class, 'logout'])->middleware('auth');

Route::get('/register', [GuestController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [GuestController::class, 'store']);

// Route::view('/lomba', 'users.lomba');
Route::view('/lomba-details', 'users.lomba-details');
Route::view('/partner', 'users.partner');
Route::view('/partner-details', 'users.partner-details');
// Route::view('/profile', 'users.profile');
// Route::view('/profile-edit', 'users.profile-edit');

// Admin Route
Route::get('/admin/lomba', [InformasiLombaController::class, 'index'])->middleware('admin');
Route::get('/admin/lomba-create', [InformasiLombaController::class, 'create'])->middleware('admin');
Route::post('/admin/lomba-create', [InformasiLombaController::class, 'store'])->middleware('admin');
Route::get('/admin/lomba-update/{id}', [InformasiLombaController::class, 'edit'])->name('admin.lomba.edit')->middleware('admin');
Route::put('/admin/lomba-update/{id}', [InformasiLombaController::class, 'update'])->name('admin.lomba.update')->middleware('admin');
Route::delete('/admin/lomba/{id}', [InformasiLombaController::class, 'destroy'])->name('lomba.destroy')->middleware('admin');

Route::get('/admin/kategori', [CategoryController::class, 'index'])->middleware('admin');
Route::get('/admin/kategori-create', [CategoryController::class, 'create'])->middleware('admin');
Route::post('/admin/kategori-create', [CategoryController::class, 'store'])->middleware('admin');
Route::get('/admin/kategori-update/{id}', [CategoryController::class, 'edit'])->name('admin.kategori.edit')->middleware('admin');
Route::put('/admin/kategori-update/{id}', [CategoryController::class, 'update'])->name('admin.kategori.update')->middleware('admin');
Route::delete('/admin/kategori/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy')->middleware('admin');

Route::view('/admin', 'admins.dashboard')->middleware('admin');
