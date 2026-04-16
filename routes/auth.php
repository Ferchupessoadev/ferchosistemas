<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', function() { 
    if(!Auth::check())
        return view('administrator.auth.login');
    else 
        return redirect(route('dashboard'));
    })->name('login.index');

Route::post('/login', [AuthController::class, 'store'])->name('login.store');



Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');