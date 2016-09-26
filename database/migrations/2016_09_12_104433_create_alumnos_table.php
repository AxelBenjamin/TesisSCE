<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
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

            $table->integer('grupos_id')->unsigned();
            $table->foreign('grupos_id')->references('id')->on('grupos')->onDelete('cascade');

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
        Schema::drop('alumnos');
    }
}
