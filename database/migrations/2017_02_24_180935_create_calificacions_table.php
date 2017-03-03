<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->text("tipo");
            $table->integer("calificacionfaltaD1");
            $table->float("calificacionD1");
            $table->integer("calificacionFaltaD2");
            $table->float("calificacionD2");
            $table->integer("calificacionfaltaP");
            $table->float("calificacionP");
            $table->float("calificacionsemestre");
            $table->float("calificacionFA");
            $table->float("calificacionFB");
            $table->float("calificaciontotal");

            $table->integer('grupos_id')->unsigned();;
            $table->foreign('grupos_id')->references('id')->on('grupos');

            $table->integer('alumnos_id')->unsigned();
            $table->foreign('alumnos_id')->references('id')->on('alumnos')->onDelete('cascade');

            $table->integer('maestros_id')->unsigned();;
            $table->foreign('maestros_id')->references('id')->on('maestros');

            $table->integer('materias_id')->unsigned();
            $table->foreign('materias_id')->references('id')->on('materias');

            $table->integer('semestres_id')->unsigned();;
            $table->foreign('semestres_id')->references('id')->on('semestres');

            $table->integer('ciclo_escolars_id')->unsigned();
            $table->foreign('ciclo_escolars_id')->references('id')->on('ciclo_escolars');

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
        Schema::drop('calificacions');
    }
}
