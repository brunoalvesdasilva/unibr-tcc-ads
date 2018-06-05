<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel0DescarteLegal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        Schema::disableForeignKeyConstraints();
        Schema::create('descarte_legal', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_descarte_legal')->comment('Campo auto incremento, não nulo, maior que zero, chave primaria');
            $table->string('nm_responsavel_descarte', 50)->comment('Responsavel do descarte');
            $table->integer('cd_telefone_descarte')->comment('Telefone');
            $table->string('nm_email_descarte', 100)->comment('Email');
            $table->string('ds_descarte', 200)->comment('Descricao do descarte efetuado');
            
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
        Schema::dropIfExists('descarte_legal');
        Schema::enableForeignKeyConstraints();
    }
}

