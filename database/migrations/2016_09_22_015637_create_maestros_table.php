<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre');
            $table->char('apa');
            $table->char('ama');
            $table->date('nacimiento');
            $table->char('nacionalidad');
            $table->char('curp');
            $table->integer('matricula');
            $table->char('contraseña');
            $table->char('colonia');
            $table->char('calle');
            $table->integer('cp');
            $table->char('municipio');
            $table->char('estado');
            $table->integer('telefono');
            $table->string('correo');
            $table->binary('foto');
            $table->string('rfc');

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
        Schema::drop('maestros');
    }
}
