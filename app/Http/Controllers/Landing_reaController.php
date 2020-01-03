<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing_reaController extends Controller
{
     public function create()
    {
        return view ('maquette landing_rea.landing_rea');
    }
}
