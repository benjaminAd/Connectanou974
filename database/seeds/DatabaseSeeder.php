<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CodePostalSeeder::class);
        $this->call(TypeOrganisationSeeder::class);
        $this->call(OrganisationSeeder::class);
        $this->call(DomainesTableSeeder::class);
        $this->call(NiveauEtudeTableSeeder::class);
        $this->call(StatutRealisateursTableSeeder::class);
        $this->call(RealisateurProjetsSeeder::class);
    }
}
