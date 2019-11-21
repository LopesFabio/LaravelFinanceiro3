<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function registro()
    {
        return view('auth.register');
    }
}
