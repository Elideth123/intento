<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CEscuelasT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('ides');
            $table->string('nombre_es',40);
            $table->integer('num');
            $table->string('calle',40);
            $table->string('telefono',10);
            $table->string('email')->unique();
            $table->boolean('activo');

            $table->integer('idm')->unsigned();
            $table->foreign('idm')->references('idm')->on('municipios');

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
        Schema::drop('escuelas');
    }
}
