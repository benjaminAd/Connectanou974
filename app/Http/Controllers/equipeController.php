<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        return view('Maquette Notre_equipe.section_equipe');
    }
}
