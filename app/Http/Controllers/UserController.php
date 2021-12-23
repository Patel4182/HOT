<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
    
        return view('user.pages.dashboard.dashboard');
    }
    public function profile()
    {
    
        return view('user.pages.profile');
    }
}
