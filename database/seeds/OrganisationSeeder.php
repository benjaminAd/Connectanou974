<?php

use Illuminate\Database\Seeder;
use App\Organisations;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisations::create([
            'IdTypeOrga' => 1,
            'RaisonSociale' => 'Connectanou',
        ]);
    }
}
