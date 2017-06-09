<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel3Contrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('contrato', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_contrato')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->double('vl_contrato', 8,2)->comment('Valor do contrato');
            $table->integer('cd_parcela_atual')->comment('Código da parcela atual');
            $table->integer('cd_parcela_total')->comment('Código de total de parcelas');
            $table->ENUM('ic_tipo_compra_venda', ['compra','venda'])->comment('Indicador tipo do contrato');
            
            // Chaves estrangeiras
            $table->integer('cd_pessoa')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Pessoa/cd_pessoa');
            $table->foreign('cd_pessoa')->references('cd_pessoa')->on('pessoa');
         
            
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
        Schema::dropIfExists('contrato');
        Schema::enableForeignKeyConstraints();
    }
}
