<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return view('administrator.auth.register');
    }

    public function store()
    {
        //
    }
}
