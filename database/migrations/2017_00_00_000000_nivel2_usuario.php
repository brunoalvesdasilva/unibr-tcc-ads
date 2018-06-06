<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nivel2Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('usuario', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_usuario')->comment('Campo auto incremento,não nulo,maior que zero,chave primaria');
            $table->string('nm_usuario', 50)->comment('Nome do Usuário');
            $table->string('nm_email', 50)->unique()->comment('E-mail do Usuário,não nulo, unique_key');
            $table->string('nm_senha', 50)->comment('Senha do Usuário');
            
            // Chaves estrangeiras
            $table->integer('cd_departamento')->unsigned()->comment('Campo não nulo, maior que zero, chave estrangeira, Tabela:Departamento/cd_departamento');
            $table->foreign('cd_departamento')->references('cd_departamento')->on('departamento')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('usuario');
        Schema::enableForeignKeyConstraints();
    }
}
