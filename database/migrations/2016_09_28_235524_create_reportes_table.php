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

            $table->float("cvtotalhrssemana");
            $table->float("cvhrsgrupo");
            $table->char("cvmes");
            $table->char("cvdia1");
            $table->char("cvdia2");

            $table->date("fechaelaboracion");
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

            //Llaves extras para guardar y jalar datos de otras tablas
            $table->integer('ciclo_escolars_id')->unsigned();
            $table->foreign('ciclo_escolars_id')->references('id')->on('ciclo_escolars');
            
            $table->integer('materias_id')->unsigned();
            $table->foreign('materias_id')->references('id')->on('materias');
            
            $table->integer('grupos_id')->unsigned();;
            $table->foreign('grupos_id')->references('id')->on('grupos');
            
            $table->integer('semestres_id')->unsigned();;
            $table->foreign('semestres_id')->references('id')->on('semestres');

            $table->integer('maestros_id')->unsigned();;
            $table->foreign('maestros_id')->references('id')->on('maestros');

            $table->integer('unidads_id')->unsigned();;
            $table->foreign('unidads_id')->references('id')->on('unidads');

            //Relaciones directas
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
