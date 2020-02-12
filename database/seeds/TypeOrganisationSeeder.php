<?php

use Illuminate\Database\Seeder;

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
            $type_organisation = new typeOrganisation([
                'Id' => $id++,
                'TypeOrganisation' => $type
            ]);
            $type_organisation->save();
        }
    }
}
