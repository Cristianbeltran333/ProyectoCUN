<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContratistaContratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratista_contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objeto_contrato');
            $table->double('sueldo');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('estado_contrato');
            $table->integer('cod_contratista')->unsigned();
            $table->integer('cod_contrato')->unsigned();
            $table->integer('cod_proyecto')->unsigned();

            $table->foreign('cod_contratista')
                  ->references('id')
                  ->on('contratistas');

            $table->foreign('cod_contrato')
                  ->references('id')
                  ->on('contratos');

            $table->foreign('cod_proyecto')
                  ->references('id')
                  ->on('proyectos'); 
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
        Schema::dropIfExists('contratista_contratos');
    }
}
