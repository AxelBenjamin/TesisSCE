<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->char('clave');
            $table->char('nombre');
            $table->char('tipo');
            $table->date('fechad1');
            $table->date('fechad2');
            $table->date('fechaA');
            $table->date('fechaB');
            $table->char('dia1');
            $table->char('dia1horario');
            $table->char('dia2');
            $table->char('dia2horario');
            $table->char('dia3');
            $table->char('dia3horario');

            $table->integer('semestres_id')->unsigned();
            $table->foreign('semestres_id')->references('id')->on('semestres')->onDelete('cascade');

            $table->integer('maestros_id')->unsigned();
            $table->foreign('maestros_id')->references('id')->on('maestros')->onDelete('cascade');

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
        Schema::drop('materias');
    }
}
