<?php

use Illuminate\Database\Seeder;
use App\NiveauEtude;

class NiveauEtudeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveaux_etude = [
            '< BAC',
            'BAC',
            'BAC +1',
            'BAC +2',
            'BAC +3',
            'BAC +4',
            'BAC +5',
            'BAC +6',
            'BAC +7',
            'BAC +8'
        ];
        $id = 1;

        foreach ($niveaux_etude as $niveau_etude) {
            NiveauEtude::create([
                'id' => $id++,
                'NiveauEtude' => $niveau_etude
            ]);
        }
    }
}
