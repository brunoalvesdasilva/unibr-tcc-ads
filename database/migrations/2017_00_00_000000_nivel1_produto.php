<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
            Schema::create('produto', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_produto')->comment('Campo auto-incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_produto', 50)->comment('Nome Produto');
            $table->string('ds_produto',200)->comment('Descrição do Produto');
            $table->float('vl_produto', 8,2)->comment('Valor do Produto');
            $table->longText('im_produto')->comment('Imagem do Produto');
            $table->integer('qt_minima_produto')->comment('Quantidade minima do Produto');
            $table->integer('qt_maxima_produto')->comment('Quantidade maxima do Produto');
            $table->integer('qt_estoque_produto')->comment('Quantidade de Produto no Estoque');
            
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
        Schema::dropIfExists('produto');
        Schema::enableForeignKeyConstraints();
    }
}
