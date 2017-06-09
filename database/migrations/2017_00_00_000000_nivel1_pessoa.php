<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel1Pessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pessoa', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_pessoa')->comment('Campo auto incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_pessoa', 50)->comment('Nome Pessoa');
            $table->enum('nm_tipo_pessoa',['juridica','fisica'])->comment('Tipo da Pessoa');
            $table->enum('nm_cliente_pessoa',['sim','nao'])->comment('Nome Social Pessoa Física');
            $table->enum('nm_fornecedor_pessoa',['sim','nao'])->comment('Nome Razão Social Pessoa Jurídica');
            
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
        Schema::dropIfExists('pessoa');
        Schema::enableForeignKeyConstraints();
    }
}
