<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre');
            $table->float('hrsteoricas');
            $table->float('hrspracticas');
            $table->float('clasesteoricas');
            $table->float('clasespracticas');
            $table->string('bibliografia');
            $table->string('aprendizaje');
            $table->string('recursosdidacticos');
            $table->string('propositos');
            $table->string('sistemaevaluacion');
            $table->char('fechaprogramada');

            $table->integer('materias_id')->unsigned();
            $table->foreign('materias_id')->references('id')->on('materias')->onDelete('cascade');

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
        Schema::drop('unidads');
    }
}
