<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing_porController extends Controller
{
    public function create()
    {
        return view ('maquette landing_porteur.landing_por');
    }
}
