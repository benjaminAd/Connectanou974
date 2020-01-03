<?php

use Illuminate\Database\Seeder;

class DomainesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Informatique - Réseau - Télécom'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Économie - Droit juridique - Politique'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Électricité - Électronique - Robotique - Mécanique'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Agriculture - Agroalimentaire - Environnement'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Mode - Esthétique - Beauté'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Banque - Assurance - Immobilier'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Construction - Architecture - Travaux publics'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Comptabilité - Finance - Gestion'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Tourisme - Hôtellerie - Restauration'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Transport - Logistique'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Arts - Lettres - Langues - Culture - Sciences humaines'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Édition - Presse - Médias - Journalisme'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Commerce - Vente - Marketing'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Sport - Loisir'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Santé - Social'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Audiovisuel - Graphisme'
        ]);
        \Illuminate\Support\Facades\DB::table('domaines')->insert([
            'Domaines' => 'Autre'
        ]);
    }
}
