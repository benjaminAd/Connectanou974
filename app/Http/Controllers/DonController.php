<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonController extends Controller
{
    public function index()
    {
        return view('maquette don.don');
    }
}
