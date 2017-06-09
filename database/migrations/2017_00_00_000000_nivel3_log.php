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
            $table->increments('cd_log')->comment('Campo auto incremento, não nulo, maior que zero, chave primária');
            $table->string('nm_titulo', 50)->comment('Título do Log');
            $table->string('ds_log', 200)->comment('Descrição do Log');
            $table->dateTime('dt_log')->comment('Data do registro do Log');
            
            // Chaves estrangeiras
            $table->integer('cd_usuario')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Usuario/cd_usuario');
            $table->foreign('cd_usuario')->references('cd_usuario')->on('usuario');
            
            // Defaults
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('log');
        Schema::enableForeignKeyConstraints();
    }
}
