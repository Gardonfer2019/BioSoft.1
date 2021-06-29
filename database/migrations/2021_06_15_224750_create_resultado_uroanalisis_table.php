<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoUroanalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_uroanalisis', function (Blueprint $table) {
            $table->id('id_uroanalisis');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->float('volumen', 8, 2);
            $table->string('aspecto');
            $table->string('color');
            $table->string('sedimento');
            $table->float('gravedad_especifica', 8, 2);
            $table->string('esterasa_leucocitaria');
            $table->string('nitritos');
            $table->integer('ph');
            $table->float('proteinas', 8, 2);
            $table->string('glucosa');
            $table->string('cetonas');
            $table->float('urobilinogeno', 8, 2);
            $table->string('bilirrubina');
            $table->string('sangre_oculta');
            $table->string('celulas_epitales');
            $table->string('eritrocitos');
            $table->string('leucocitos');
            $table->string('bacterias');
            $table->string('moco');
            $table->string('cristales');
            $table->string('cilindros');
            $table->string('levaduras');
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
        Schema::dropIfExists('resultado_uroanalisis');
    }
}
