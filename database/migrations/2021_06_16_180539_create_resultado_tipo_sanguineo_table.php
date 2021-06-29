<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoTipoSanguineoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_tipo_sanguineo', function (Blueprint $table) {
            $table->id('id_tipo_sanguineo');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->string('tipo_rh');
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
        Schema::dropIfExists('resultado_tipo_sanguineo');
    }
}
