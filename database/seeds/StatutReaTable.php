<?php

use Illuminate\Database\Seeder;

class StatutReaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('statut_realisateurs')->insert([
            'Statut' => 'Etudiant'
        ]);
        \Illuminate\Support\Facades\DB::table('statut_realisateurs')->insert([
            'Statut' => 'Formateur'
        ]);
        \Illuminate\Support\Facades\DB::table('statut_realisateurs')->insert([
            'Statut' => 'Salarié'
        ]);
        \Illuminate\Support\Facades\DB::table('statut_realisateurs')->insert([
            'Statut' => 'Demandeur d\'emploi'
        ]);
        \Illuminate\Support\Facades\DB::table('statut_realisateurs')->insert([
            'Statut' => 'Entrepreneur'
        ]);
    }
}
