<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id');

            $table->text("cvhrsemana");
            $table->text("cvhrgrupo");

            $table->text("cvmes1");
            $table->text("cvdia1");
            $table->text("cvmes2");
            $table->text("cvdia2");
            $table->text("cvmes3");
            $table->text("cvdia3");
            $table->text("cvmes4");
            $table->text("cvdia4");
            $table->text("cvmes5");
            $table->text("cvdia5");
            $table->text("cvmes6");
            $table->text("cvdia6");
            $table->text("cvmes7");
            $table->text("cvdia7");
            $table->text("cvmes8");
            $table->text("cvdia8");
            $table->text("cvmes9");
            $table->text("cvdia9");
            $table->text("cvmes10");
            $table->text("cvdia10");
            $table->text("cvmes11");
            $table->text("cvdia11");
            $table->text("cvmes12");
            $table->text("cvdia12");
            $table->text("cvmes13");
            $table->text("cvdia13");
            $table->text("cvmes14");
            $table->text("cvdia14");
            $table->text("cvmes15");
            $table->text("cvdia15");
            $table->text("cvmes16");
            $table->text("cvdia16");
            $table->text("cvmes17");
            $table->text("cvdia17");
            $table->text("cvmes18");
            $table->text("cvdia18");
            $table->text("cvmes19");
            $table->text("cvdia19");
            $table->text("cvmes20");
            $table->text("cvdia20");
            $table->text("cvmes21");
            $table->text("cvdia21");
            $table->text("cvmes22");
            $table->text("cvdia22");
            $table->text("cvmes23");
            $table->text("cvdia23");
            $table->text("cvmes24");
            $table->text("cvdia24");

            $table->integer('maestros_id')->unsigned();
            $table->foreign('maestros_id')->references('id')->on('maestros')->onDelete('cascade');

            $table->integer('ciclo_escolars_id')->unsigned();
            $table->foreign('ciclo_escolars_id')->references('id')->on('ciclo_escolars')->onDelete('cascade');

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
        Schema::drop('visitas');
    }
}
