<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.home')->name('home');

Route::view('/servicios', 'landing.services')->name('services');

Route::view('/nosotros', 'landing.aboutas')->name('about');


Route::view('/contacto', 'landing.contact')->name('contact');


Route::post('/contacto', [ContactController::class, 'store'])
    ->middleware('throttle:contact-form')
    ->name('contact.store');

