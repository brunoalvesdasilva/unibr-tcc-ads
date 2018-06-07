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
            $table->string('nm_email', 200)->comment('E-mail Pessoa');
            $table->string('nm_senha', 200)->comment('Senha Pessoa');
            $table->bigInteger('cd_cnpj')->comment('codigo CNPJ pessoa')->nullable();
            $table->bigInteger('cd_cpf')->comment('Codigo CPF pessoa')->nullable();
            $table->string('nm_endereco', 50)->comment('Nome endereco')->nullable();
            $table->string('nm_complemento', 50)->comment('Nome complemento')->nullable();
            $table->string('nm_bairro', 50)->comment('Nome bairro')->nullable();
            $table->string('nm_cidade', 50)->comment('Nome cidade')->nullable();
            $table->string('sg_estado', 2)->comment('Sigla estado')->nullable();
            $table->enum('nm_situacao_cadastral',['ativo','inativo'])->comment('Indicador situação cadastral');
            $table->string('nm_resonsavel_empresa', 50)->comment('Responsavel pela Empresa')->nullable();
            $table->bigInteger('cd_telefone')->comment('Telefone')->nullable();
            $table->enum('ic_permite_divulgacao',['sim','nao'])->comment('Indicador situacao divulgacao');
            $table->string('ds_obsevacao', 2)->comment('Descricao observação')->nullable();
            $table->enum('ic_tipo_pessoa_fisica_juridica',['fisica','juridica'])->comment('Indicador tipo pessoa');
            $table->enum('ic_cliente_fornecedor',['cliente','fornecedor'])->comment('Indicador cliente fornecedor');

            // Chaves estrangeiras
            $table->integer('cd_ramo')->nullable()->unsigned()->default(NULL)->comment('Campo maior que zero, chave estrangeira, Tabela:Ramo/cd_ramo');
            $table->foreign('cd_ramo')->references('cd_ramo')->on('ramo')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cd_descarte_legal')->nullable()->unsigned()->default(NULL)->comment('Campo maior que zero, chave estrangeira, Tabela:Descarte_Legal/cd_descarte_legal');
            $table->foreign('cd_descarte_legal')->references('cd_descarte_legal')->on('descarte_legal')->onDelete('cascade')->onUpdate('cascade');

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
