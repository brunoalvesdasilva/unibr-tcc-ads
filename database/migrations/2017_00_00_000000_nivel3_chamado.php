<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel3Chamado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('chamado', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_chamado')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('ds_chamado', 200)->comment('Descrição do chamado');
            $table->date('dt_abertura_chamado')->comment('Data abertura chamado');
            $table->date('dt_fechamento_chamado')->comment('Data fechamento chamado');
            $table->enum('ic_chamado_aberto_fechado', ['aberto', 'fechado'])->comment('Indicador de chamado aberto ou fechado');

            
            // Chaves estrangeiras
            $table->integer('cd_contrato')->unsigned()->nullable()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Contrato/cd_contrato');
            $table->foreign('cd_contrato')->references('cd_contrato')->on('contrato');
            $table->integer('cd_usuario_autor')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Usuario/cd_usuario');
            $table->foreign('cd_usuario_autor')->references('cd_usuario')->on('usuario');           
            $table->integer('cd_usuario_responsavel')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Usuario/cd_usuario');
            $table->foreign('cd_usuario_responsavel')->references('cd_usuario')->on('usuario'); 

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
        Schema::dropIfExists('chamado');
        Schema::enableForeignKeyConstraints();
    }
}
