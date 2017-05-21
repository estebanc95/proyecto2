<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaModelosAlmacenados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_almacenados', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');

            $table->string('nombre')->required();

            $table->integer('id_motor')->unsigned();
            $table->foreign('id_motor')->references('id')->on('motores');

            $table->integer('id_marco')->unsigned();
            $table->foreign('id_marco')->references('id')->on('marcos');

            $table->integer('id_control')->unsigned();
            $table->foreign('id_control')->references('id')->on('controles');

            $table->integer('id_bateria')->unsigned();
            $table->foreign('id_bateria')->references('id')->on('baterias');

            $table->integer('id_camara')->unsigned();
            $table->foreign('id_camara')->references('id')->on('camaras');

            $table->integer('id_gps')->unsigned();
            $table->foreign('id_gps')->references('id')->on('gps');
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
        Schema::dropIfExists('modelos_almacenados');
    }
}
