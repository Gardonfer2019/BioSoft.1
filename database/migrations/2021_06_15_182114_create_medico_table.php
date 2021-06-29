<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->id('id_medico');
            $table->string('numero_registro');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->string('numero_telefono');
            $table->string('correo');
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
        Schema::dropIfExists('medico');
    }
}
