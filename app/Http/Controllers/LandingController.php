<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function realisateur()
    {
        return view('maquette landing_rea.landing_rea');
    }

    public function porteur()
    {
        return view('maquette landing_porteur.landing_por');
    }
}
