<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    
public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->id();
        $table->date('fecha_inicio')->nullable();
        $table->date('fecha_fin')->nullable();
        $table->timestamps();
        $table->unsignedBigInteger('createdby_id')->nullable();
        $table->unsignedBigInteger('modifiedby_id')->nullable();
        
        $table->foreign('createdby_id')
            ->references('id')->on('users')
            ->onDelete('set null');
        $table->foreign('modifiedby_id')
            ->references('id')->on('users')
            ->onDelete('set null');
        }
        );
    }
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}    


