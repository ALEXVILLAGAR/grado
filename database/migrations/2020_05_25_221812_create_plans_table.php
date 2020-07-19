<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('responsable');  
            $table->string('fecha');
            $table->string('descripcion');
            $table->string('publico');
            $table->unsignedBigInteger('actividad_id')->unsigned();              
            $table->unsignedBigInteger('entidad_id')->unsigned();
            $table->foreign('entidad_id')->references('id')->on('entities');
            $table->foreign('actividad_id')->references('id')->on('actividads');
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
        Schema::dropIfExists('plans');
    }
}
