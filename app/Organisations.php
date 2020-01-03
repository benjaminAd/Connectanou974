<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    protected $fillable = ['SIRET', 'IdCP', 'IdTypeOrga', 'IdPorteur', 'RaisonSociale', 'LogoURL', 'Activite', 'Telephone', 'NbSalaries', 'SiteUrl', 'Adresse'];
}
