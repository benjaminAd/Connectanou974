<?php

use Illuminate\Database\Seeder;
use App\RealisateurProjets;

class RealisateurProjetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealisateurProjets::create([
            'Nom' => 'PAYET',
            'Prenom' => 'Jean',
            'Email' =>  'jean.payet@gmail.com',
            'Login' => 'Jp',
            'Mdp' => Hash::make('JeanPayet'),
            'Telephone' => '009887655',
            'DateNaissance' => '2019-12-26',
            'CVURL' => '1',
            'LinkedinURL' => '1',
            'NBProjets' => '2',
            'NbPoints' => '1',
            'IdNiveauEtudes' => '1',
            'IdOrga' => '1',
            'IdStatut' => '1',
            'IdDomaine' => '1',
        ]);
    }
}
