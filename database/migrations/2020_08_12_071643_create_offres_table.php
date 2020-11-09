<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id_offre');
            $table->timestamps();
            $table->integer('id_employeur');
            $table->integer('nref');
            $table->date('date_depot');
            $table->string('descriptif_poste');
            $table->string('niveau_etude');
            $table->string('domaine');
            $table->string('niveau_experience');
            $table->string('competence');
            $table->string('qualite');
            $table->string('langue');
            $table->string('adresse');
            $table->string('ville');
            $table->string('region');
            $table->string('poste_cadre');
            $table->string('type_contrat');
            $table->string('debut_mission');
            $table->string('procedure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre');
    }
}
