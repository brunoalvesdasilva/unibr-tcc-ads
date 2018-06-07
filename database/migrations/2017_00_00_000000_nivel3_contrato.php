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
            $table->dateTime('dt_contrato')->comment('Data do contrato');
            $table->integer('qt_itens_contrato')->comment('Quantidade de produtos');
            $table->integer('cd_parcela_atual')->comment('Código da parcela atual');
            $table->integer('cd_parcela_total')->comment('Código de total de parcelas');
            $table->ENUM('ic_tipo_compra_venda', ['compra','venda'])->comment('Indicador tipo do contrato');
            $table->ENUM('ic_situacao_aprovado_reprovado', ['aguardando', 'aprovado','reprovado'])->comment('Indicador status do contrato');
            
            // Chaves estrangeiras
            $table->integer('cd_pessoa')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Pessoa/cd_pessoa');
            $table->foreign('cd_pessoa')->references('cd_pessoa')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cd_forma_pagamento')->nullable()->unsigned()->default(NULL)->comment('Campo maior que zero, chave estrangeira, Tabela:Forma_pagamento/cd_forma_pagamento');
            $table->foreign('cd_forma_pagamento')->references('cd_forma_pagamento')->on('forma_pagamento')->onDelete('cascade')->onUpdate('cascade');
            
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
