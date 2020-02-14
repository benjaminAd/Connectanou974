<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealisateurProjets extends Model
{
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
