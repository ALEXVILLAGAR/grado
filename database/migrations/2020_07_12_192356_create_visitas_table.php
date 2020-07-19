<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('estado');
            $table->string('descripcion');
            $table->unsignedBigInteger('persona_id');            
            $table->unsignedBigInteger('entidad_id');
            $table->foreign('persona_id')->references('id')->on('people');
            $table->foreign('entidad_id')->references('id')->on('entities');
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
        Schema::dropIfExists('visitas');
    }
}
