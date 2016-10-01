<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
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

            $table->float("cvtotalhrssemana");
            $table->float("cvhrsgrupo");
            $table->char("cvmes");
            $table->char("cvdia1");
            $table->char("cvdia2");

            $table->float("psetotalhrssemana");
            $table->float("psenumclasessemana");

            $table->longtext("pseagdepartamentales");
            $table->longtext("pseagpracticas");
            $table->longtext("pseagtareaspart");
            $table->longtext("pseagreqexentarA");
            $table->longtext("pseagreqexentarB");
            $table->longtext("pseagreqexentarC");

            $table->float("psehrsteoricas");
            $table->float("psehrspracticas");
            $table->longtext("psepropositocurso");

            $table->longtext("agtrabajopracfin");
            
            $table->integer('temas_id')->unsigned();
            $table->foreign('temas_id')->references('id')->on('temas')->onDelete('cascade');
            
            $table->integer('plan_estudios_id')->unsigned();
            $table->foreign('plan_estudios_id')->references('id')->on('plan_estudios')->onDelete('cascade');

            $table->integer('alumnos_id')->unsigned();
            $table->foreign('alumnos_id')->references('id')->on('alumnos')->onDelete('cascade');

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
        Schema::drop('reportes');
    }
}
