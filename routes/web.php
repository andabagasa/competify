<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/lomba', 'lomba');
Route::view('/partner', 'partner');
Route::view('/profile', 'profile');
