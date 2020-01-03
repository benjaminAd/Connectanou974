<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre_projet');
            $table->string('type_projet');
            $table->text('desc_projet');
            $table->date('date_debut');
            $table->date('date_butoir_projet');
            $table->binary('URL_PJ');
            $table->float('Budget_min_projet');
            $table->float('Budget_max_projet');
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
        Schema::dropIfExists('projets');
    }
}
