<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Auth;
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


Route::get('/dashboard', function () { 
    $messages = ContactMessage::latest()->paginate(10);

    return view('administrator.dashboard', [
        'title' => 'Dashboard - Fercho Sistemas', 
        'messages' => $messages
    ]);
    
    })->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');



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