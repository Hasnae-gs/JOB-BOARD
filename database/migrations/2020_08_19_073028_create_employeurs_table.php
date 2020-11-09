<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->string('identifiant');
            $table->string('raison_sosial');
            $table->string('type_entreprise');
            $table->string('secteur');
            $table->string('effectif');
            $table->string('ville');
            $table->integer('tele');
            $table->string('site');
            $table->string('poste');
            $table->string('coordonnees');
            $table->string('logo')->default('/images/default-company-1.jpg');
            $table->string('description');
            $table->integer('nbr_handicap');
            $table->string('politique');
            $table->string('accessibilite');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeurs');
    }
}
