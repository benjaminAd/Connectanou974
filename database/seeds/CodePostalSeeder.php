<?php

use Illuminate\Database\Seeder;
use App\CodePostal;

class CodePostalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codes_postaux = [
            ['CodePostal' => 97400, 'Ville' => 'Saint-Denis'],
            ['CodePostal' => 97410, 'Ville' => 'Saint-Pierre'],
            ['CodePostal' => 97412, 'Ville' => 'Bras-Panon'],
            ['CodePostal' => 97413, 'Ville' => 'Cilaos'],
            ['CodePostal' => 97419, 'Ville' => 'La Possession'],
            ['CodePostal' => 97420, 'Ville' => 'Le Port'],
            ['CodePostal' => 97425, 'Ville' => 'Les Avirons'],
            ['CodePostal' => 97426, 'Ville' => 'Les Trois-Bassins'],
            ['CodePostal' => 97427, 'Ville' => 'Étang Salé'],
            ['CodePostal' => 97429, 'Ville' => 'Petite-Île'],
            ['CodePostal' => 97430, 'Ville' => 'Le Tampon'],
            ['CodePostal' => 97431, 'Ville' => 'La Plaine des Palmistes'],
            ['CodePostal' => 97433, 'Ville' => 'Salazie'],
            ['CodePostal' => 97436, 'Ville' => 'Saint-Leu'],
            ['CodePostal' => 97438, 'Ville' => 'Sainte-Marie'],
            ['CodePostal' => 97439, 'Ville' => 'Sainte-Rose'],
            ['CodePostal' => 97440, 'Ville' => 'Saint-André'],
            ['CodePostal' => 97441, 'Ville' => 'Sainte-Suzanne'],
            ['CodePostal' => 97442, 'Ville' => 'Saint-Philippe'],
            ['CodePostal' => 97450, 'Ville' => 'Saint-Louis'],
            ['CodePostal' => 97460, 'Ville' => 'Saint-Paul'],
            ['CodePostal' => 97470, 'Ville' => 'Saint-Benoît'],
            ['CodePostal' => 97480, 'Ville' => 'Saint-Joseph']
        ];

        foreach ($codes_postaux as $code_postal) {
            CodePostal::create([
                'CodePostal' => $code_postal['CodePostal'],
                'Ville' => $code_postal['Ville']
            ])->save();
        }
    }
}
