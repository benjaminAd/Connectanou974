<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuth;


class Porteur extends Model implements Authenticatable
{

    protected $guard = 'porteur';
    use BasicAuth;
    protected $fillable = ['IdOrga', 'IdCP', 'Nom', 'Prenom', 'Email', 'Login', 'Mdp', 'Telephone', 'Poste'];


     /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->Mdp;
    }
}
