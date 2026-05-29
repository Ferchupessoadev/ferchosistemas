<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/login', [AuthController::class, 'store'])->name('login.store');



Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
