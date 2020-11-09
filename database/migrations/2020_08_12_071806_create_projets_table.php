<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_projet');
            $table->timestamps();
            $table->integer('id-condidat');
            $table->string('intitule');
            $table->string('domaine');
            $table->string('localisation');
            $table->string('description');
            $table->integer('budget');
            $table->string('motivation');
            $table->string('delai_realisation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet');
    }
}
