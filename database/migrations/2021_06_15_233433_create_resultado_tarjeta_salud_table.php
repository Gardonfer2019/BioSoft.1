<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoTarjetaSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_tarjeta_salud', function (Blueprint $table) {
            $table->id('id_tarjeta_salud');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->string('rpr');
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
        Schema::dropIfExists('resultado_tarjeta_salud');
    }
}
