<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (!auth()->check()){
            return redirect()->route('login');
        } else{
            return view('profile')->with('users', Auth::user());
        }

    }
}
