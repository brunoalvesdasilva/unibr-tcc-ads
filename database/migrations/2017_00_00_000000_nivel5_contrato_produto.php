<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel5ContratoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('contrato_produto', function (Blueprint $table) {
            
            // Básico
            
            // Chaves estrangeiras
            $table->integer('cd_contrato')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Contrato/cd_contrato');
            $table->foreign('cd_contrato')->references('cd_contrato')->on('contrato')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cd_produto')->unsigned()->nullable()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Produto/cd_produto');
            $table->foreign('cd_produto')->references('cd_produto')->on('produto')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('contrato_produto');
        Schema::enableForeignKeyConstraints();
    }
}
