<?php

use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organisation = Organisations::create([
            'IdTypeOrga' => 1,
            'RaisonSociale' => 'Connectanou',
            'IdTypeOrga' => 2
        ]);
        $organisation->save();
    }
}
