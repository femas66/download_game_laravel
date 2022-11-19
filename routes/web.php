<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

//ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name('homeadmin');
//ADMIN LOGIN
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/actionlogin', [AdminController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/reg', [AdminController::class, 'register']);