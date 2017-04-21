<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     		chema::create('produto', function (Blueprint $table) {
            
            // Básico
            $table->increments('cd_produto');
            $table->string('nm_produto', 50);
			$table->string('ds_produto',200);
			$table->float('vl_produto', 8,2);
			$table->binary('im_produto');
			$table->integer('qt_minima_produto');
			$table->integer('qt_maxima_produto');
			$table->integer('qt_estoque_produto');
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
