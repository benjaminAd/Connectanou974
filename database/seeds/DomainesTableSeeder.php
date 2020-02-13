<?php

use Illuminate\Database\Seeder;
use App\Domaines;

class DomainesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaines = [
            'Informatique - Réseau - Télécom',
            'Économie - Droit juridique - Politique',
            'Électricité - Électronique - Robotique - Mécanique',
            'Agriculture - Agroalimentaire - Environnement',
            'Mode - Esthétique - Beauté',
            'Banque - Assurance - Immobilier',
            'Construction - Architecture - Travaux publics',
            'Comptabilité - Finance - Gestion',
            'Tourisme - Hôtellerie - Restauration',
            'Transport - Logistique',
            'Arts - Lettres - Langues - Culture - Sciences humaines',
            'Édition - Presse - Médias - Journalisme',
            'Commerce - Vente - Marketing',
            'Sport - Loisir',
            'Santé - Social',
            'Audiovisuel - Graphisme',
            'Autre'
        ];
        $id = 1;

        foreach ($domaines as $domaine) {
            Domaines::create([
                'Id' => $id++,
                'Domaines' => $domaine
            ]);
        }
    }
}
