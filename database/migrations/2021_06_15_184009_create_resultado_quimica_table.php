<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoQuimicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_quimica', function (Blueprint $table) {
            $table->id('id_quimica');
            $table->integer('id_cliente');
            $table->integer('numero_orden');
            $table->integer('id_medico');
            $table->float('acido_urico', 8, 2);
            $table->float('creatinina', 8, 2);
            $table->float('nitrogeno_ureico', 8, 2);
            $table->float('colesterol_total', 8, 2);
            $table->float('colesterol_hdl', 8, 2);
            $table->float('colesterol_ldl', 8, 2);
            $table->float('trigliceridos', 8, 2);
            $table->float('relacion_col_T_col_hdl', 8, 2);
            $table->float('relacion_col_trig_col_hdl', 8, 2);
            $table->float('glucosa_ayuno', 8, 2);
            $table->float('glucosa_2hpp', 8, 2);
            $table->float('glicohemoglobina', 8, 2);
            $table->float('ast_tgo', 8, 2);
            $table->float('alp_tgp', 8, 2);
            $table->float('bilirrubina_total', 8, 2);
            $table->float('bilirrubina_directa', 8, 2);
            $table->float('bilirrubina_indirecta', 8, 2);
            $table->longText('otros');
            $table->string('metodo_utlizado');
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
        Schema::dropIfExists('resultado_quimica');
    }
}
