<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('landing.home'))->name('home');

Route::get('/services', fn() => view('landing.services'))->name('services');


Route::get('/contacto', fn() => view('contact'))->name('contact');


Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');
