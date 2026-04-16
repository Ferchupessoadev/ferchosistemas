<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => 
    view('landing.home', [
        'title' => 'Inicio - Fercho Sistemas'
    ]))->name('home');

Route::get('/services', fn() =>
    view('landing.services', [
        'title' => 'Servicios - Fercho Sistemas',
    ]))->name('services');


Route::get('/contacto', fn() => 
    view('contact', [
        'title' => 'Contacto - Fercho Sistemas',
    ]))->name('contact');


Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');




