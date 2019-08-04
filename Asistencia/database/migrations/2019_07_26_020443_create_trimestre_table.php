<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrimestreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimestre', function (Blueprint $table) {
            $table->increments('id_trimestre');
            $table->integer('fk_id_jornada')->unsigned();
            $table->string('numero_trimestre',60);
            $table->foreign('fk_id_jornada')->references('id_jornada')->on('jornada');
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
        Schema::dropIfExists('trimestre');
    }
}
