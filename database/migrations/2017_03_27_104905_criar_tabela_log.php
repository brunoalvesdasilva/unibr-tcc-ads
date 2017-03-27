<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_log');
            $table->string('nm_mensagem', 100);
            
            // Chaves estrangeiras
            $table->integer('cd_usuario')->unsigned();
            $table->foreign('cd_usuario')->references('cd_usuario')->on('usuario');
            
            $table->rememberToken();
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
        Schema::dropIfExists('log');
    }
}
