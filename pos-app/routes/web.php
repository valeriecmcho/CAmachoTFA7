<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Landing page
Route::get('/', [PageController::class, 'index'])->name('home');

// About page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Customer Accounts page
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

// User Accounts page
Route::get('/users', [UserController::class, 'index'])->name('users');
