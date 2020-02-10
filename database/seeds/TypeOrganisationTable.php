<?php

use Illuminate\Database\Seeder;

class TypeOrganisationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Entreprise', 'Association', 'Ecole'];

        foreach ($types as $type) {
            $organisation = new typeOrganisation([
                'TypeOrganisation' => $type
            ]);
            $organisation->save();
        }
    }
}
