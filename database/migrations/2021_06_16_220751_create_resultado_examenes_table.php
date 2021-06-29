<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_examenes', function (Blueprint $table) {
            $table->id('id_resultado_examenes');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_examen');
            $table->string('resultado');
            $table->string('unidad');
            $table->string('valor_referencia');
            $table->longText('otros');
            $table->longText('observaciones');
            $table->boolean('borrado');
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
        Schema::dropIfExists('resultado_examenes');
    }
}
