<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Auth::guard('porteur')->check());
        Auth::guard('porteur')->logout();
        return view('Accueil');
    }
}
