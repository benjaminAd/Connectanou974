<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class equipeController extends Controller
{
    public function create()
    {
        return view('Maquette Notre_equipe.section_equipe');
    }
}
