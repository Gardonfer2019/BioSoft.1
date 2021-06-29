<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoCoproanalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_coproanalisis', function (Blueprint $table) {
            $table->id('id_coproanalisis');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->string('color');
            $table->string('consistencia');
            $table->string('moco');
            $table->string('sangre_macro');
            $table->string('eritrocitos');
            $table->string('sangre_oculta');
            $table->string('leucocitos');
            $table->string('cristales');
            $table->string('parasitos');
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
        Schema::dropIfExists('resultado_coproanalisis');
    }
}
