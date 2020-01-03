<?php

use Illuminate\Database\Seeder;

class CodePostalTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97400,
            'Ville' => 'Saint-Denis'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97410,
            'Ville' => 'Saint-Pierre'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97412,
            'Ville' => 'Bras-Panon'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97413,
            'Ville' => 'Cilaos'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97419,
            'Ville' => 'La Possession'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97420,
            'Ville' => 'Le Port'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97425,
            'Ville' => 'Les Avirons'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97426,
            'Ville' => 'Les Trois-Bassins'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97427,
            'Ville' => 'Étang Salé'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97429,
            'Ville' => 'Petit-Île'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97430,
            'Ville' => 'Le Tampon'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97431,
            'Ville' => 'La Plaine des Palmistes'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97433,
            'Ville' => 'Salazie'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97436,
            'Ville' => 'Saint-Leu'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97438,
            'Ville' => 'Sainte-Marie'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97439,
            'Ville' => 'Sainte-Rose'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97440,
            'Ville' => 'Saint-André'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97441,
            'Ville' => 'Sainte-Suzanne'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97442,
            'Ville' => 'Saint-Philippe'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97450,
            'Ville' => 'Saint-Louis'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97460,
            'Ville' => 'Saint-Paul'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97470,
            'Ville' => 'Saint-Benoît'
        ]);
        \Illuminate\Support\Facades\DB::table('code_postaux')->insert([
            'CodePostal' => 97480,
            'Ville' => 'Saint-Joseph'
        ]);
    }
}
