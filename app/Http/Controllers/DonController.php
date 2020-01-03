<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonController extends Controller
{
    public function create ()
    {
        return view('maquette don.don');
    }
}
