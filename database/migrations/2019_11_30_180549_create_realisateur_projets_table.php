<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealisateurProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisateur_projets', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Login');
            $table->string('Mdp');
            $table->double('Telephone');
            $table->date('DateNaissance');
            $table->string('CVURL')->nullable();
            $table->string('LinkedinURL');
            $table->integer('NbProjets');
            $table->integer('NbPoints');
            $table->integer('IdNiveauEtudes');
            $table->integer('IdDiplomes')->nullable();
            $table->integer('IdFormations')->nullable();
            $table->integer('IdOrga')->nullable();
            $table->integer('IdStatut');
            $table->integer('IdDomaine');
            $table->foreign('IdOrga')->references('Id')->on('organisations');
            $table->foreign('IdStatut')->references('id')->on('statut_realisateurs');
            $table->foreign('IdNiveauEtudes')->references('Id')->on('statut_realisateurs');
            $table->foreign('IdDiplomes')->references('Id')->on('diplomes');
            $table->foreign('IdFormations')->references('Id')->on('formations');
            $table->foreign('IdDomaine')->references('Id')->on('domaines');
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
        Schema::dropIfExists('realisateur_projets');
    }
}
