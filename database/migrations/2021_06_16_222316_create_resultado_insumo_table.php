<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_insumo', function (Blueprint $table) {
            $table->id('id_insumo');
            $table->string('nombre');
            $table->integer('cantidad_existencia');
            $table->float('precio_unitario', 8 , 2);
            $table->float('total');
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
        Schema::dropIfExists('resultado_insumo');
    }
}
