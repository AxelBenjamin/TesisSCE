<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCicloEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_escolars', function (Blueprint $table) {
            $table->increments('id');
            $table->char("nombre");
            $table->date("fechaInicio");
            $table->date("fechaFinal");
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
        Schema::drop('ciclo_escolars');
    }
}
