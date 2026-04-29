<?php

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    $messages = ContactMessage::latest()->paginate(10);

    return view('administrator.dashboard', [
        'title' => 'Dashboard - Fercho Sistemas',
        'messages' => $messages
    ]);

    })->name('dashboard')->middleware('auth');

