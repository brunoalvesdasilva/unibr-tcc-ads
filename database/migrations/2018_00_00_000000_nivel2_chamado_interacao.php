<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel2ChamadoInteracao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('chamado_interacoes', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_interacoes')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('ds_interacao', 200)->comment('Descricao das interacoes');
            $table->ENUM('ic_fluxo_entrada_saida', ['entrada','saida'])->comment('Indicador fluxo de interacoes');
            
            // Chaves estrangeiras
            $table->integer('cd_contrato')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Contrato/cd_contrato');
            $table->foreign('cd_contrato')->references('cd_contrato')->on('contrato')->onDelete('cascade')->onUpdate('cascade');
            
            // Default
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
        Schema::dropIfExists('chamado_interacoes');
        Schema::enableForeignKeyConstraints();
    }
}
