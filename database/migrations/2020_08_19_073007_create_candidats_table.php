<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->string('prenom');
            $table->string('civilite');
            $table->string('cin');
            $table->date('ddn');
            $table->string('adresse');
            $table->string('ville');
            $table->string('region');
            $table->string('type_handicape');
            $table->integer('tele');
            $table->string('mobilite_geographique');
            $table->string('nomvr');
            $table->string('competences_informatiques');
            $table->string('photo');
            $table->string('CV');
            $table->string('lettre_motivation');
            $table->string('description');
            $table->string('nad');



            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
