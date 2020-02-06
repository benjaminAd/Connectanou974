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
            $table->string('Login')->nullable();
            $table->string('Mdp');
            $table->double('Telephone')->nullable();
            $table->date('DateNaissance')->nullable();
            $table->string('formations')->nullable();
            $table->string('CVURL')->nullable();
            $table->string('LinkedinURL')->nullable();
            $table->integer('NbProjets');
            $table->integer('NbPoints');
            $table->integer('IdNiveauEtudes')->unsigned();
            $table->integer('IdDiplomes')->unsigned();
            $table->integer('IdOrga')->unsigned();
            $table->integer('IdStatut')->unsigned();
            $table->integer('IdDomaine')->unsigned();
            $table->foreign('IdOrga')->references('Id')->on('organisations');
            $table->foreign('IdStatut')->references('id')->on('statut_realisateurs');
            $table->foreign('IdNiveauEtudes')->references('Id')->on('statut_realisateurs');
            $table->foreign('IdDiplomes')->references('Id')->on('diplomes');
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
