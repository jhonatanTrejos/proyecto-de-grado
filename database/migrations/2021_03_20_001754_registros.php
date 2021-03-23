<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cedula');
            $table->string('nombre_empleado');
            $table->string('apellidos_empleado');
            $table->string('cargo');
            $table->date('fecha_inicio');
            $table->date('fecha_retiro');
            $table->integer('dias_laborados');
            $table->integer('sueldo');
            $table->string('devengado');
            $table->string('ley100');
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
        Schema::dropIfExists('registros');
    }
}
