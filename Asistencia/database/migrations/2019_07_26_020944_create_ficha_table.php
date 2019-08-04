<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->increments('id_ficha');
            $table->string('numero_ficha','60');
            $table->integer('fk_id_control')->unsigned();
            $table->integer('fk_id_trimestre')->unsigned();
            $table->integer('fk_id_ambiente')->unsigned();
            $table->string('hora_inicio_ficha', 60);
            $table->string('hora_fin_ficha', 60);
            $table->foreign('fk_id_control')->references('id_control')->on('control');
            $table->foreign('fk_id_trimestre')->references('id_trimestre')->on('trimestre');
            $table->foreign('fk_id_ambiente')->references('id_ambiente')->on('ambiente');
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
        Schema::dropIfExists('ficha');
    }
}
