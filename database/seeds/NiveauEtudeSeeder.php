<?php

use Illuminate\Database\Seeder;

class NiveauEtudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => '< BAC'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +1'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +2'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +3'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +4'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +5'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +6'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +7'
        ]);
        \Illuminate\Support\Facades\DB::table('niveau_etudes')->insert([
            'NiveauEtude' => 'BAC +8'
        ]);
    }
}
