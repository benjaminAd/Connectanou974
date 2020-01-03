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
        \Illuminate\Support\Facades\DB::table('type_organisations')->insert([
            'TypeOrganisation' => 'Entreprise'
        ]);
        \Illuminate\Support\Facades\DB::table('type_organisations')->insert([
            'TypeOrganisation' => 'Association'
        ]);
        \Illuminate\Support\Facades\DB::table('type_organisations')->insert([
            'TypeOrganisation' => 'Ecole'
        ]);
    }
}
