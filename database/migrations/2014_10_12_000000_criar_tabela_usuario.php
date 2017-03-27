<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_usuario');
            $table->string('nm_usuario', 50);
            $table->string('nm_email', 50)->unique();
            $table->string('nm_senha', 64);
            
            // Chaves estrangeiras
            $table->integer('cd_departamento')->unsigned();
            $table->foreign('cd_departamento')->references('cd_departamento')->on('departamento');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
