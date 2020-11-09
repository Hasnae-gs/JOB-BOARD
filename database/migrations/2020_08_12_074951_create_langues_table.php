<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langues', function (Blueprint $table) {
            $table->increments('id_langue');
            $table->timestamps();
            $table->integer('id-condidat');
            $table->string('Langue');
            $table->string('niveau');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('langue');
    }
}
