<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodePostal extends Model
{
    protected $table = 'codes_postaux';

    protected $fillable = ['Id', 'CodePostal', 'Ville'];
}
