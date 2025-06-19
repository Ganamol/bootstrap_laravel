<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/index', [FrontendController::class, 'index'])->name('index');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::post('/dologin', [FrontendController::class, 'dologin'])->name('do.login');

Route::get('admin/login', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('admin/dologin', [AdminController::class, 'dologin'])->name('admindo.login');


Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::post('/postregister', [UserController::class, 'postregister'])->name('postregister');