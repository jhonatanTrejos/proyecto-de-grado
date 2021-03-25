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
            $table->string('cargo')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_retiro')->nullable();
            $table->integer('dias_laborados')->nullable();
            $table->integer('sueldo')->nullable();
            $table->string('devengado')->nullable();
            $table->string('ley100')->nullable();
            $table->unsignedBigInteger('libro_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('createdby_id')->nullable();
            $table->unsignedBigInteger('modifiedby_id')->nullable();

            $table->foreign('createdby_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            $table->foreign('modifiedby_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            $table->foreign('libro_id')
                ->references('id')->on('libros')
                ->onDelete('set null');
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
