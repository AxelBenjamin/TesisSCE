<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestres', function (Blueprint $table) {
            $table->increments('id');
            $table->char("nombre");
            //Agrego el id de la trabla Ciclo escolars
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
        Schema::drop('semestres');
    }
}
