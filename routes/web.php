<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.home', [
        'title' => 'Inicio - Fercho Sistemas',
    ]);
})->name('home');


Route::get('/contacto', function () {
    return view('contact', [
        'title' => 'Contacto - Fercho Sistemas',
    ]);
})->name('contact');


Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');


Route::get('/dashboard', function () {
    return view('administrator.dashboard', [
        'title' => 'Dashboard - Fercho Sistemas',
    ]);
})->name('dashboard')->middleware('auth');

Route::get('/services', function () {
    return view('services', [
        'title' => 'Servicios - Fercho Sistemas',
    ]);
})->name('services');


Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');