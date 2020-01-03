<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('Id');
            $table->double('SIRET')->nullable();
            $table->unique('SIRET', 'unique_SIRET');
            $table->integer('IdCP')->nullable();
            $table->integer('IdTypeOrga');
            $table->integer('IdPorteur')->nullable();
            $table->string('RaisonSociale');
            $table->text('LogoUrl')->nullable();
            $table->text('Activite')->nullable();
            $table->integer('Telephone')->nullable();
            $table->integer('NbSalaries')->nullable();
            $table->text('SiteUrl')->nullable();
            $table->text('Adresse')->nullable();
            $table->foreign('IdCP')->references('Id')->on('codePostal');
            $table->foreign('IdTypeOrga')->references('Id')->on('typeOrganisation');
            $table->foreign('IdPorteur')->references('Id')->on('porteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
