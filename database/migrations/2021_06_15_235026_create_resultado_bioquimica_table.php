<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoBioquimicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_bioquimica', function (Blueprint $table) {
            $table->id('id_bioquimica');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->float('glucosa_al_azar');
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
        Schema::dropIfExists('resultado_bioquimica');
    }
}
