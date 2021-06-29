<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoEmbarazoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_embarazo', function (Blueprint $table) {
            $table->id('id_prueba_embarazo');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->boolean('positivo');
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
        Schema::dropIfExists('resultado_embarazo');
    }
}
