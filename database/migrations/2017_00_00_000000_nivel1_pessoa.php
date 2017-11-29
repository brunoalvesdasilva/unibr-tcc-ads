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
            $table->string('nm_razao_social', 50)->comment('Nome Pessoa');
            $table->integer('cd_cnpj')->comment('codigo CNPJ pessoa');
            $table->integer('cd_cpf')->comment('Codigo CPF pessoa');
            $table->integer('cd_inscricao')->comment('Codigo Inscricao Estadual');
            $table->string('nm_endereco', 50)->comment('Nome endereco');
            $table->string('nm_complemento', 50)->comment('Nome complemento');
            $table->string('nm_bairro', 50)->comment('Nome bairro');
            $table->string('nm_cidade', 50)->comment('Nome cidade');
            $table->string('sg_estado', 2)->comment('Sigla estado');
            $table->enum('nm_situacao_cadastral',['ativo','inativo'])->comment('Indicador situação cadastral');
            $table->enum('nm_tipo_pessoa',['juridica','fisica'])->comment('Tipo da Pessoa');

            
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
