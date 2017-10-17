<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CCarrerasT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('idc');
            $table->string('nombre_c',60);
            $table->string('modalidad',50);
            $table->string('duración',20);
            $table->boolean('activo');

            $table->integer('ides')->unsigned();
            $table->foreign('ides')->references('ides')->on('escuelas');

            $table->rememberToken();
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
        Schema::drop('carreras');
    }
}
