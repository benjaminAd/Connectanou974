<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuth;

class realisateur_projets extends Model implements Authenticatable
{

    use BasicAuth;

    protected $guard = 'real';
    protected $fillable = ['Nom', 'Prenom', 'Email', 'Login', 'Mdp', 'DateNaissance', 'Telephone', 'DateNaissance', 'CVURL', 'LinkedinURL', 'IdOrga', 'NbProjets', 'NbPoints', 'IdNiveauEtudes', 'IdDiplomes', 'IdFormations', 'IdStatut', 'IdDomaine'];
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
