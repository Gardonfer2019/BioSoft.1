<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoHematologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_hematologia', function (Blueprint $table) {
            $table->id('id_hematologia');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->float('hemoglobina', 8, 2);
            $table->float('hematocrito', 8, 2);
            $table->float('vcm', 8, 2);
            $table->float('hcm', 8, 2);
            $table->float('chcm', 8, 2);
            $table->float('reticulocitos', 8, 2);
            $table->float('plaquetas', 8, 2);
            $table->float('eritrosedimentacion', 8, 2);
            $table->float('leucocitos', 8, 2);
            $table->float('neutrofilos', 8, 2);
            $table->float('linfocitos', 8, 2);
            $table->float('monocitos', 8, 2);
            $table->float('eosinofilos', 8, 2);
            $table->float('basofilos', 8, 2);
            $table->float('n_banda', 8, 2);
            $table->float('neutrofilos2', 8, 2);
            $table->float('linfocitos2', 8, 2);
            $table->float('monocitos2', 8, 2);
            $table->float('eosinofilos2', 8, 2);
            $table->float('basofilos2', 8, 2);
            $table->float('n_banda2', 8, 2);
            $table->longText('observaciones');
            $table->string('serie_roja');
            $table->string('serie_blanca');
            $table->string('serie_plaquetaria');
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
        Schema::dropIfExists('resultado_hematologia');
    }
}
