<?php

use Illuminate\Database\Seeder;
use App\StatutRealisateur;

class StatutRealisateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuts_realisateur = [
            'Etudiant',
            'Formateur',
            'Salarié',
            'Demandeur d\'emploi',
            'Entrepreneur'
        ];
        $id = 1;

        foreach ($statuts_realisateur as $statut) {
            StatutRealisateur::create([
                'id' => $id++,
                'Statut' => $statut
            ]);
        }
    }
}
