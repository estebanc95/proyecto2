<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPrecargados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precargados', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('id_motor')->unsigned();
            $table->integer('id_marco')->unsigned();
            $table->integer('id_control')->unsigned();
            $table->integer('id_bateria')->unsigned();
            $table->integer('id_camara')->unsigned();
            $table->integer('id_gps')->unsigned();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precargados');
    }
}
