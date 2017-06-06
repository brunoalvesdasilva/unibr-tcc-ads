<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel3Log extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('log', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_log');
            $table->string('nm_titulo', 50);
            $table->string('ds_log', 200);
            $table->dateTime('dt_log');
            
            // Chaves estrangeiras
            $table->integer('cd_usuario')->unsigned();
            $table->foreign('cd_usuario')->references('cd_usuario')->on('usuario');
            
            // Defaults
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
