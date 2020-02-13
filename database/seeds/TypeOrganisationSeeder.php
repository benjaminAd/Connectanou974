<?php

use Illuminate\Database\Seeder;
use App\typeOrganisation;

class TypeOrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Entreprise', 'Association', 'Ecole'];
        $id = 1;
        foreach ($types as $type) {
            typeOrganisation::create([
                'Id' => $id++,
                'TypeOrganisation' => $type
            ])->save();
        }
    }
}
