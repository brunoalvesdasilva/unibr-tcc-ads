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
            $table->increments('cd_contrato');
            $table->double('vl_contrato', 8,2);
            $table->integer('cd_parcela_atual');
            $table->integer('cd_parcela_total');
            $table->ENUM('ic_tipo_compra_venda', ['compra','venda']);
            
            // Chaves estrangeiras
            $table->integer('cd_fornecedor')->unsigned();
            $table->foreign('cd_fornecedor')->references('cd_fornecedor')->on('fornecedor');
            $table->integer('cd_cliente')->unsigned();
            $table->foreign('cd_cliente')->references('cd_cliente')->on('cliente');
            
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
